<?php declare(strict_types=1);

namespace App\Core\Application\Action;

use App\Core\Application\Service\Formatter\HostFormatter;
use App\Core\Application\Service\Formatter\TaxFormatter;
use App\Core\Domain\Entity\Tax;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class GetTaxAction
 */
class GetTaxAction extends AbstractAction
{
    /** @var TaxFormatter */
    private $formatter;

    /**
     * GetHostAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     * @param HostFormatter                 $formatter
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler,
        HostFormatter $formatter
    ) {
        parent::__construct($logger, $authorizationChecker, $tokenStorage, $exceptionHandler);
        $this->formatter = $formatter;
    }

    /**
     * @param Tax|null $tax
     *
     * @return JsonResponse
     */
    public function __invoke(?Tax $tax): JsonResponse
    {
        try {
            if (!$tax) {
                throw new NotFoundHttpException('Tax is not found');
            }

            return new JsonResponse(
                $this->formatter->execute($tax),
                JsonResponse::HTTP_OK
            );
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
