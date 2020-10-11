<?php

use App\Core\Application\Action\Order\CreateOrderAction;
use App\Core\Application\Service\Formatter\OrderListFormatter;
use App\Core\Application\Service\Order\CreateOrderService;
use App\Core\Domain\Entity\Order\Order;
use App\Tests\TestCase\AbstractActionTestCase;
use Prophecy\Argument;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CreateOrderActionTest extends AbstractActionTestCase
{
    /** @var CreateOrderAction */
    private $instance;

    /** @var Order */
    private $order;

    /** @var OrderListFormatter */
    private $formatter;

    /** @var CreateOrderService */
    private $service;

    /** @var Request */
    private $request;

    public function setUp()
    {
        parent::setUp();
        $this->formatter = $this->prophesize(OrderListFormatter::class);
        $this->order = $this->prophesize(Order::class);
        $this->service = $this->prophesize(CreateOrderService::class);
        $this->request = $this->prophesize(Request::class);

        $this->request->getContent()->willReturn(json_encode(['data']));
        $this->request->getContentType()->willReturn('json');

        $this->instance = new CreateOrderAction(
            $this->logger->reveal(),
            $this->authorizationChecker->reveal(),
            $this->tokenStorage->reveal(),
            $this->exceptionHandler->reveal(),
            $this->formatter->reveal(),
            $this->service->reveal()
        );
    }

    public function testInvoke()
    {
        $expected = [];
        $this->order->getId()->willReturn(1);
        $this->formatter->execute(Argument::any())->willReturn([]);
        $this->service->execute(Argument::any())->willReturn($this->order->reveal());

        $result = $this->instance->__invoke($this->request->reveal());

        $this->assertEquals(Response::HTTP_CREATED, $result->getStatusCode());
        $this->assertInstanceOf(JsonResponse::class, $result);
        $this->assertEquals(json_encode($expected), $result->getContent());
    }

    public function testException()
    {
        $this->exceptionHandler->execute(Argument::any())->willReturn(new JsonResponse(['error' => 'error'], Response::HTTP_NOT_FOUND));
        $result = $this->instance->__invoke($this->request->reveal());

        $this->assertInstanceOf(JsonResponse::class, $result);
        $this->assertEquals(Response::HTTP_NOT_FOUND, $result->getStatusCode());
    }
}
