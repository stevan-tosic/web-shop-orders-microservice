<?php declare(strict_types = 1);

namespace App\Core\Application\Action\Localization;

use App\Core\Application\Service\LocalizationProvider;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class GetMessagesAction
 */
class GetMessagesAction extends AbstractAction
{
    /** @var LocalizationProvider $localizationProvider */
    private $localizationProvider;

    /**
     * GetMessagesAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     * @param LocalizationProvider          $localizationProvider
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler,
        LocalizationProvider $localizationProvider
    ) {
        parent::__construct($logger, $authorizationChecker, $tokenStorage, $exceptionHandler);
        $this->localizationProvider = $localizationProvider;
    }

    /**
     * Returns all localization messages
     *
     * @return JsonResponse
     */
    public function __invoke(): JsonResponse
    {
        try {
            $response                 = [];
            $response['localization'] = $this->localizationProvider->getMessages();

            return new JsonResponse($response, Response::HTTP_OK);
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
