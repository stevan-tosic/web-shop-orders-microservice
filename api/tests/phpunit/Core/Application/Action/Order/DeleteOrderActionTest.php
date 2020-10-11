<?php

use App\Core\Application\Action\Order\DeleteOrderAction;
use App\Core\Application\Action\Order\ListOrdersAction;
use App\Core\Domain\Entity\Order\Order;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\OrderRepository;
use App\Tests\TestCase\AbstractActionTestCase;
use Prophecy\Argument;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class DeleteOrderActionTest extends AbstractActionTestCase
{
    /** @var ListOrdersAction */
    private $instance;

    /** @var OrderRepository */
    private $repository;

    /** @var Order */
    private $order;

    public function setUp()
    {
        parent::setUp();
        $this->repository = $this->prophesize(OrderRepository::class);
        $this->order = $this->prophesize(Order::class);

        $this->instance = new DeleteOrderAction(
            $this->logger->reveal(),
            $this->authorizationChecker->reveal(),
            $this->tokenStorage->reveal(),
            $this->exceptionHandler->reveal(),
            $this->repository->reveal()
        );
    }

    public function testInvoke()
    {
        $expected = [];
        $this->order->getId()->willReturn(1);
        $this->repository->remove($this->order->reveal())->willReturn();

        $result = $this->instance->__invoke($this->order->reveal());

        $this->assertEquals(Response::HTTP_NO_CONTENT, $result->getStatusCode());
        $this->assertInstanceOf(JsonResponse::class, $result);
        $this->assertEquals(json_encode($expected), $result->getContent());
    }

    public function testException()
    {
        $this->exceptionHandler->execute(Argument::any())->willReturn(new JsonResponse(['error' => 'error'], Response::HTTP_NOT_FOUND));
        $result = $this->instance->__invoke(null);

        $this->assertInstanceOf(JsonResponse::class, $result);
        $this->assertEquals(Response::HTTP_NOT_FOUND, $result->getStatusCode());
    }
}
