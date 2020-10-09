<?php declare(strict_types=1);

namespace App\Core\Application\Action\Order;

use App\Core\Application\Service\Formatter\OrderListFormatter;
use App\Core\Domain\Entity\Order\Order;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class GetOrderAction
 */
class GetOrderAction extends AbstractAction
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

            return new JsonResponse(
                $this->formatter->execute([$order]),
                JsonResponse::HTTP_OK
            );
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
