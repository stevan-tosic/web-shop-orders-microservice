<?php declare(strict_types=1);

namespace App\Core\Application\Action\Order;

use App\Core\Application\Service\ListOrdersService;
use App\Utils\AbstractAction;
use App\Utils\Exception\ExceptionHandler;
use App\Utils\Logger\Logger;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class ListOrdersAction
 */
class ListOrdersAction extends AbstractAction
{
    /** @var ListOrdersService */
    protected $listOrdersService;

    /**
     * UserAction constructor.
     *
     * @param Logger                        $logger
     * @param AuthorizationCheckerInterface $authorizationChecker
     * @param TokenStorageInterface         $tokenStorage
     * @param ExceptionHandler              $exceptionHandler
     * @param ListOrdersService             $listOrdersService
     */
    public function __construct(
        Logger $logger,
        AuthorizationCheckerInterface $authorizationChecker,
        TokenStorageInterface $tokenStorage,
        ExceptionHandler $exceptionHandler,
        ListOrdersService $listOrdersService
    ) {
        parent::__construct($logger, $authorizationChecker, $tokenStorage, $exceptionHandler);
        $this->listOrdersService = $listOrdersService;
    }

    /**
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function __invoke(Request $request): JsonResponse
    {
        try {
            $params = [
                'page'   => $request->query->getInt('page', 1),
                'limit'  => $request->query->getInt('limit', 10),
                'filter' => $request->query->get('filter', []),
                'sort'   => $request->query->get('sort_by', ''),
            ];

            $result = $this->listOrdersService->execute($params);

            return new JsonResponse($result, JsonResponse::HTTP_OK);
        } catch (\Throwable $exception) {
            return $this->exceptionHandler->execute($exception);
        }
    }
}
