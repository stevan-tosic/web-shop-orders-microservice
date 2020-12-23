<?php declare(strict_types = 1);

namespace App\Core\Application\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Translation\Loader\JsonFileLoader;

/**
 * Class LocalizationProvider
 */
class LocalizationProvider
{
    const TRANSLATION_DIR = __DIR__."/../../../../translations";

    /** @var LoggerInterface $logger */
    private $logger;
    /** @var Finder $finder */
    private $finder;
    /** @var JsonFileLoader $jsonFileLoader */
    private $jsonFileLoader;
    /** @var string $defaultLanguage */
    private $defaultLanguage;
    /** @var string[] $availableLanguages */
    private $availableLanguages;
    /** @var string $fallbackLanguage */
    private $fallbackLanguage;
    /** @var string[][] $messageCatalogue */
    private $messageCatalogue;
    /** @var mixed $localizationConfig */
    private $localizationConfig;

    /** @var string $translationDir */
    private $translationDir;

    /**
     * LocalizationProvider constructor.
     *
     * @param LoggerInterface       $logger
     * @param Finder                $finder
     * @param JsonFileLoader        $jsonFileLoader
     * @param ParameterBagInterface $parameterHandler
     */
    public function __construct(
        LoggerInterface $logger,
        Finder $finder,
        JsonFileLoader $jsonFileLoader,
        ParameterBagInterface $parameterHandler
    ) {
        $this->logger = $logger;
        $this->finder = $finder;
        $this->jsonFileLoader = $jsonFileLoader;
        $this->localizationConfig = $parameterHandler->get('eop.languages');

        $this->setTranslationDir(self::TRANSLATION_DIR);
    }

    /**
     * @param string $translationDir
     */
    public function setTranslationDir(string $translationDir): void
    {
        $this->translationDir = $translationDir;
    }

    /**
     * @return mixed
     */
    public function getTranslationDir()
    {
        return $this->translationDir;
    }

    /**
     * Retrieves all available localization data
     *
     * @return array
     */
    public function getMessages(): array
    {
        $this->loadConfig();
        $this->buildCatalogue();

        return $this->messageCatalogue;
    }

    /**
     * Loads the localization config
     */
    public function loadConfig(): void
    {
        $this->defaultLanguage = $this->localizationConfig["default"];
        $this->availableLanguages = $this->localizationConfig["available"];
        $this->fallbackLanguage = $this->localizationConfig["fallbackLanguage"];
    }

    /**
     * Builds the message catalogue
     */
    private function buildCatalogue(): void
    {
        $this->createCatalogue();
        $this->fillMissingLocalesWithDefault();
        if (!empty($this->fallbackLanguage)) {
            $this->fillMissingMessagesWithDefault();
        }
        $this->sortCatalogue();
    }

    /**
     * Creates catalogue of localization messages
     */
    private function createCatalogue(): void
    {
        $langCatalogue = [];

        $this->finder->files()->in($this->getTranslationDir());

        foreach ($this->finder as $file) {
            $filenameInfo = \explode('.', $file->getFilename());
            if ($filenameInfo[0] !== 'messages' || $file->getExtension() !== 'json') {
                continue;
            }
            $fileLocale = $filenameInfo[1];
            if (!\in_array($fileLocale, $this->availableLanguages)) {
                $this->logger->warning("Language file for locale {$fileLocale} exists but the language is not configured/enabled");
                continue;
            }
            $langFile = $this->jsonFileLoader->load($file, $fileLocale);
            $langCatalogue[$fileLocale] = $langFile->all()["messages"];
        }

        $this->messageCatalogue = $langCatalogue;
    }

    /**
     * Inserts default localization content for missing locales
     */
    private function fillMissingLocalesWithDefault(): void
    {
        $localesWithoutLangFiles = \array_diff($this->availableLanguages, \array_keys($this->messageCatalogue));
        if (!empty($localesWithoutLangFiles)) {
            foreach ($localesWithoutLangFiles as $locale) {
                $this->logger->warning("Language file for locale {$locale} does not exist, falling back to 'en'");
                $this->messageCatalogue[$locale] = $this->messageCatalogue[$this->defaultLanguage];
            }
        }
    }

    /**
     * Inserts default localization messages for missing messages
     */
    private function fillMissingMessagesWithDefault(): void
    {
        foreach ($this->messageCatalogue[$this->defaultLanguage] as $key => $label) {
            foreach ($this->messageCatalogue as $locale => $catalogue) {
                if ("en" === $locale) {
                    continue;
                }

                if (!isset($catalogue[$key])) {
                    $this->messageCatalogue[$locale][$key] = $label;
                }
            }
        }
    }

    /**
     * Sorts the message catalogue in order defined in the configuration
     */
    private function sortCatalogue(): void
    {
        \uksort($this->messageCatalogue, function ($lang1, $lang2) {
            return \array_search($lang1, $this->availableLanguages) > \array_search($lang2, $this->availableLanguages);
        });
    }
}
