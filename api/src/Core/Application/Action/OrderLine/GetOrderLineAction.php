<?php declare(strict_types=1);

namespace App\Core\Application\Action\OrderLine;

use App\Core\Application\Service\Formatter\OrderLineFormatter;
use App\Core\Domain\Entity\Order\OrderLine;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class GetOrderLineAction
 */
class GetOrderLineAction extends AbstractAction
{
    /** @var OrderLineFormatter */
    private $formatter;

    /**
     * GetOrderLineAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     * @param OrderLineFormatter            $formatter
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler,
        OrderLineFormatter $formatter
    ) {
        parent::__construct($logger, $authorizationChecker, $tokenStorage, $exceptionHandler);
        $this->formatter = $formatter;
    }

    /**
     * @param Request        $request
     * @param OrderLine|null $orderLine
     *
     * @return JsonResponse
     */
    public function __invoke(Request $request, ?OrderLine $orderLine): JsonResponse
    {
        try {
            if (!$orderLine) {
                throw new NotFoundHttpException('Order line is not found');
            }

            return new JsonResponse(
                $this->formatter->execute($orderLine),
                JsonResponse::HTTP_OK
            );
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
