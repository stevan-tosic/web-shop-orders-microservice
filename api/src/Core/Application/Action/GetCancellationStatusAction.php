<?php declare(strict_types=1);

namespace App\Core\Application\Action;

use App\Core\Application\Service\Formatter\CancellationStatusFormatter;
use App\Core\Application\Service\Formatter\HostFormatter;
use App\Core\Domain\Entity\CancellationStatus;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class GetCancellationStatusAction
 */
class GetCancellationStatusAction extends AbstractAction
{
    /** @var CancellationStatusFormatter */
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
     * @param CancellationStatus|null $cancellationStatus
     *
     * @return JsonResponse
     */
    public function __invoke(?CancellationStatus $cancellationStatus): JsonResponse
    {
        try {
            if (!$cancellationStatus) {
                throw new NotFoundHttpException('Cancellation status is not found');
            }

            return new JsonResponse(
                $this->formatter->execute($cancellationStatus),
                JsonResponse::HTTP_OK
            );
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
