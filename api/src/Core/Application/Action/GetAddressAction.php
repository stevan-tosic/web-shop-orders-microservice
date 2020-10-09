<?php declare(strict_types=1);

namespace App\Core\Application\Action;

use App\Core\Application\Service\Formatter\AddressFormatter;
use App\Core\Domain\Entity\Address;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class GetOrderLineAction
 */
class GetAddressAction extends AbstractAction
{
    /** @var AddressFormatter */
    private $formatter;

    /**
     * GetOrderLineAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     * @param AddressFormatter              $formatter
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler,
        AddressFormatter $formatter
    ) {
        parent::__construct($logger, $authorizationChecker, $tokenStorage, $exceptionHandler);
        $this->formatter = $formatter;
    }

    /**
     * @param Address|null $address
     *
     * @return JsonResponse
     */
    public function __invoke(?Address $address): JsonResponse
    {
        try {
            if (!$address) {
                throw new NotFoundHttpException('Address is not found');
            }

            return new JsonResponse(
                $this->formatter->execute($address),
                JsonResponse::HTTP_OK
            );
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
