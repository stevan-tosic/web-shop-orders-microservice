<?php

use App\Core\Application\Action\Order\GetOrderAction;
use App\Core\Application\Service\Formatter\OrderListFormatter;
use App\Core\Domain\Entity\Order\Order;
use App\Tests\TestCase\AbstractActionTestCase;
use Prophecy\Argument;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class GetOrderActionTest extends AbstractActionTestCase
{
    /** @var GetOrderAction */
    private $instance;

    /** @var Order */
    private $order;

    /** @var OrderListFormatter */
    private $formatter;

    public function setUp()
    {
        parent::setUp();
        $this->formatter = $this->prophesize(OrderListFormatter::class);
        $this->order = $this->prophesize(Order::class);

        $this->instance = new GetOrderAction(
            $this->logger->reveal(),
            $this->authorizationChecker->reveal(),
            $this->tokenStorage->reveal(),
            $this->exceptionHandler->reveal(),
            $this->formatter->reveal()
        );
    }

    public function testInvoke()
    {
        $expected = [];
        $this->order->getId()->willReturn(1);
        $this->formatter->execute(Argument::any())->willReturn([]);

        $result = $this->instance->__invoke($this->order->reveal());

        $this->assertEquals(Response::HTTP_OK, $result->getStatusCode());
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
