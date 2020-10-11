<?php

use App\Core\Application\Action\Order\ListOrdersAction;
use App\Core\Application\Service\ListOrdersService;
use App\Tests\TestCase\AbstractActionTestCase;
use Prophecy\Argument;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class ListOrdersActionTest extends AbstractActionTestCase
{
    /** @var ListOrdersAction */
    private $instance;

    /** @var ListOrdersService */
    private $service;

    /** @var Request */
    private $request;

    public function setUp()
    {
        parent::setUp();
        $this->service = $this->prophesize(ListOrdersService::class);

        $this->request = new Request();
        $this->request->query->set('page', 1);
        $this->request->query->set('limit', 10);
        $this->request->query->set('filter', []);
        $this->request->query->set('sort_by', '');

        $this->instance = new ListOrdersAction(
            $this->logger->reveal(),
            $this->authorizationChecker->reveal(),
            $this->tokenStorage->reveal(),
            $this->exceptionHandler->reveal(),
            $this->service->reveal()
        );
    }

    public function testInvoke()
    {
        $expected = [];
        $this->service->execute(Argument::any())->willReturn($expected);

        $result = $this->instance->__invoke($this->request);

        $this->assertEquals(Response::HTTP_OK, $result->getStatusCode());
        $this->assertInstanceOf(JsonResponse::class, $result);
        $this->assertEquals(json_encode($expected), $result->getContent());
    }

    public function testException()
    {
        $this->service->execute(Argument::any())->willThrow(new Exception());
        $this->exceptionHandler->execute(Argument::any())->willReturn(new JsonResponse(['error' => 'error'], Response::HTTP_INTERNAL_SERVER_ERROR));
        $result = $this->instance->__invoke($this->request);

        $this->assertInstanceOf(JsonResponse::class, $result);
        $this->assertEquals(Response::HTTP_INTERNAL_SERVER_ERROR, $result->getStatusCode());
    }
}
