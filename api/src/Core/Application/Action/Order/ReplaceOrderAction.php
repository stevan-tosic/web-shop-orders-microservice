<?php declare(strict_types=1);

namespace App\Core\Application\Action\Order;

use App\Core\Application\Service\Formatter\OrderListFormatter;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class CreateOrderAction
 */
class ReplaceOrderAction extends AbstractAction
{
    /** @var OrderListFormatter */
    private $formatter;

    /**
     * GetOrderAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     * @param OrderListFormatter            $formatter
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler,
        OrderListFormatter $formatter
    ) {
        parent::__construct($logger, $authorizationChecker, $tokenStorage, $exceptionHandler);
        $this->formatter = $formatter;
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        /* TODO - Replace order logic */
        try {
            return new JsonResponse(
//                $this->formatter->execute([$order]),
                [],
                JsonResponse::HTTP_CREATED
            );
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
