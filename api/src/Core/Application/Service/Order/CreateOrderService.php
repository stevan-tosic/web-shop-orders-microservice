<?php declare(strict_types = 1);

namespace App\Core\Application\Service\Order;

use App\Core\Infrastructure\Persistence\Doctrine\Repository\OrderRepository;

/**
 * Class CreateOrderService
 */
class CreateOrderService
{
    /** @var OrderRepository $orderRepository */
    private $orderRepository;

    /** @var OrderCollectionFieldService */
    private $collectionFieldService;

    /**
     * CreateOrderService constructor.
     *
     * @param OrderRepository $orderRepository
     * @param OrderCollectionFieldService $orderCollectionField
     */
    public function __construct(
        OrderRepository $orderRepository,
        OrderCollectionFieldService $orderCollectionField
    ) {
        $this->orderRepository = $orderRepository;
        $this->collectionFieldService = $orderCollectionField;
    }

    public function execute(array $orderData)
    {
        $transformContext = [];

        $order = $this->collectionFieldService->arrayToOrder($orderData, $transformContext);

        $this->orderRepository->save($order);

        return $order;
    }

}
