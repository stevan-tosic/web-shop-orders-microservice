<?php declare(strict_types=1);

namespace App\Core\Application\Action\Order;

use App\Core\Domain\Entity\Order\Order;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\OrderRepository;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class DeleteOrderAction
 */
class DeleteOrderAction extends AbstractAction
{
    /** @var OrderRepository $orderRepository */
    private $orderRepository;

    /**
     * GetOrderAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     * @param OrderRepository               $orderRepository
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler,
        OrderRepository $orderRepository
    ) {
        parent::__construct($logger, $authorizationChecker, $tokenStorage, $exceptionHandler);
        $this->orderRepository = $orderRepository;
    }

    /**
     * @param Order|null $order
     *
     * @return JsonResponse
     */
    public function __invoke(?Order $order): JsonResponse
    {
        try {
            if (!$order) {
                throw new NotFoundHttpException('Order is not found');
            }

            $this->orderRepository->remove($order);

            return new JsonResponse(
                [],
                JsonResponse::HTTP_NO_CONTENT
            );
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
