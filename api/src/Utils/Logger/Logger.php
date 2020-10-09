<?php declare(strict_types = 1);

namespace App\Utils\Logger;

use Psr\Log\LoggerInterface;

/**
 * Class Logger
 */
class Logger
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * EopAbstractController constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param \Throwable|string $content
     * @param string            $loggerType
     *
     * @return void
     */
    public function log($content, string $loggerType = 'notice'): void
    {
        $message = \is_string($content) ? $content : '';

        if ($content instanceof \Throwable) {
            $message = "{$content->getMessage()} at line {$content->getLine()} in file {$content->getFile()} Code: {$content->getCode()}";
        }

        switch ($loggerType) {
            case 'debug':
                $this->logger->debug($message);
                break;
            case 'notice':
                 $this->logger->notice($message);
                break;
            case 'warning':
                $this->logger->warning($message);
                break;
            case 'error':
                $this->logger->error($message);
                break;
            case 'critical':
                $this->logger->critical($message);
                break;
            default:
                $this->logger->info($message);
                break;
        }
    }
}
