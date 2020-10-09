<?php declare(strict_types=1);

namespace App\Core\Application\Action;

use App\Core\Application\Service\Formatter\HostFormatter;
use App\Core\Domain\Entity\Host;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class GetHostAction
 */
class GetHostAction extends AbstractAction
{
    /** @var HostFormatter */
    private $formatter;

    /**
     * GetHostAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     * @param HostFormatter                 $formatter
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler,
        HostFormatter $formatter
    ) {
        parent::__construct($logger, $authorizationChecker, $tokenStorage, $exceptionHandler);
        $this->formatter = $formatter;
    }

    /**
     * @param Host|null $host
     *
     * @return JsonResponse
     */
    public function __invoke(?Host $host): JsonResponse
    {
        try {
            if (!$host) {
                throw new NotFoundHttpException('Host is not found');
            }

            return new JsonResponse(
                $this->formatter->execute($host),
                JsonResponse::HTTP_OK
            );
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
