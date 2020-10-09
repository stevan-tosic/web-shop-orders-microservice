<?php declare(strict_types=1);

namespace App\Core\Application\Action\OrderLine;

use App\Core\Domain\Entity\Order\OrderLine;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class GetOrderLineAction
 */
class DeleteOrderLineAction extends AbstractAction
{
    /**
     * GetOrderLineAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler
    ) {
        parent::__construct($logger, $authorizationChecker, $tokenStorage, $exceptionHandler);
    }

    /**
     * @param Request        $request
     * @param OrderLine|null $orderLine
     *
     * @return JsonResponse
     */
    public function __invoke(Request $request, ?OrderLine $orderLine): JsonResponse
    {
        try {
            if (!$orderLine) {
                throw new NotFoundHttpException('Order line is not found');
            }

            return new JsonResponse(
                [],
                JsonResponse::HTTP_NO_CONTENT
            );
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
