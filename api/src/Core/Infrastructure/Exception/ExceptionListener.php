<?php

namespace App\Core\Infrastructure\Exception;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;

/**
 * Class ExceptionListener
 */
class ExceptionListener implements EventSubscriberInterface
{
    protected $logger;

    /**
     * ExceptionListener constructor.
     *
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * Use `console debug:event-dispatcher kernel.exception` command to check
     * if underlying listeners are in correct priority orders.
     *
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => [
                ['handleException', 100],
            ],
        ];
    }

    /**
     * @param GetResponseForExceptionEvent $event
     */
    public function handleException(GetResponseForExceptionEvent $event)
    {
        $exception = $event->getException();

        $this->logger->critical("{$exception->getMessage()} at line {$exception->getFile()} in file {$exception->getLine()} CODE: {$exception->getCode()}");
    }
}
