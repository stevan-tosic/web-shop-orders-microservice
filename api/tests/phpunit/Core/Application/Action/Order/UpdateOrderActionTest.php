<?php

use App\Core\Application\Action\Order\UpdateOrderAction;
use App\Core\Application\Service\Formatter\OrderListFormatter;
use App\Core\Domain\Entity\Order\Order;
use App\Tests\TestCase\AbstractActionTestCase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class UpdateOrderActionTest extends AbstractActionTestCase
{
    /** @var UpdateOrderAction */
    private $instance;

    /** @var Order */
    private $order;

    /** @var OrderListFormatter */
    private $formatter;

    /** @var Request */
    private $request;

    public function setUp()
    {
        parent::setUp();
        $this->formatter = $this->prophesize(OrderListFormatter::class);
        $this->order = $this->prophesize(Order::class);
        $this->request = new Request();

        $this->instance = new UpdateOrderAction(
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

        $result = $this->instance->__invoke($this->request);

        $this->assertEquals(Response::HTTP_OK, $result->getStatusCode());
        $this->assertInstanceOf(JsonResponse::class, $result);
        $this->assertEquals(json_encode($expected), $result->getContent());
    }
}
