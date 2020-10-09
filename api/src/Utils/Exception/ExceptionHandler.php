<?php declare(strict_types=1);

namespace App\Utils\Exception;

use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Class ExceptionHandler
 */
class ExceptionHandler
{
    /** @var Logger $logger */
    private $logger;

    /** @var string */
    private $env;

    /**
     * @param Logger          $logger
     * @param KernelInterface $kernel
     */
    public function __construct(Logger $logger, KernelInterface $kernel)
    {
        $this->logger = $logger;
        $this->env    = $kernel->getEnvironment();
    }

    /**
     * @param \Throwable $exception
     *
     * @return JsonResponse
     */
    public function execute(\Throwable $exception): JsonResponse
    {
        switch (\get_class($exception)) {
            case AccessDeniedException::class:
                $type    = 'warning';
                $message = 'error.forbidden';
                $status  = JsonResponse::HTTP_FORBIDDEN;
                break;

            case NotFoundHttpException::class:
                $type    = 'info';
                $message = 'error.notFound';
                $status  = JsonResponse::HTTP_NOT_FOUND;
                break;

            case BadRequestHttpException::class:
                $type    = 'info';
                $message = 'error.badRequest';
                $status  = JsonResponse::HTTP_BAD_REQUEST;
                break;

            case UnprocessableEntityHttpException::class:
                $type    = 'error';
                $message = 'error.malformedRequest';
                $status  = JsonResponse::HTTP_UNPROCESSABLE_ENTITY;
                break;

            default:
                $type    = 'error';
                $message = 'error.unexpectedError';
                $status  = JsonResponse::HTTP_INTERNAL_SERVER_ERROR;
        }

        $this->logger->log($exception, $type);

        if ($this->env === 'dev') {
            $message = $exception->getMessage();
        }

        return new JsonResponse(['error' => $message], $status);
    }
}
