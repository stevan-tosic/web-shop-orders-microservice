<?php declare(strict_types=1);

namespace App\Core\Application\Action\Order;

use App\Core\Application\Service\Formatter\OrderListFormatter;
use App\Core\Application\Service\Order\CreateOrderService;
use App\Core\Domain\Entity\Order\Order;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class CreateOrderAction
 */
class CreateOrderAction extends AbstractAction
{
    /** @var OrderListFormatter */
    private $formatter;

    /** @var CreateOrderService */
    private $createOrder;

    /**
     * GetOrderAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     * @param OrderListFormatter            $formatter
     * @param CreateOrderService            $createOrder
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler,
        OrderListFormatter $formatter,
        CreateOrderService $createOrder
    ) {
        parent::__construct($logger, $authorizationChecker, $tokenStorage, $exceptionHandler);
        $this->formatter   = $formatter;
        $this->createOrder = $createOrder;
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $data = $this->getJsonContent($request);
            if (empty($data)) {
                throw new UnprocessableEntityHttpException('Malformed request');
            }
            $result = $this->createOrder->execute($data);

            if (!$result instanceof Order) {
                throw new BadRequestHttpException(\json_encode($result)." in ".self::class);
            }

            return new JsonResponse(
                $this->formatter->execute([$result]),
                JsonResponse::HTTP_CREATED
            );
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
