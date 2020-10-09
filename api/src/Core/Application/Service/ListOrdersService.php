<?php declare(strict_types=1);

namespace App\Core\Application\Service;

use App\Core\Application\QueryObject\OrdersListQueryObject;
use App\Core\Application\Service\Formatter\OrderListFormatter;
use Knp\Component\Pager\Pagination\AbstractPagination;

/**
 * Class ListOrdersService
 */
class ListOrdersService
{
    /** @var PaginationService $paginationService */
    private $paginationService;

    /** @var OrderListFormatter */
    private $formatter;

    /** @var OrdersListQueryObject */
    private $ordersList;

    /**
     * ListOrdersService constructor.
     * @param PaginationService     $paginationService
     * @param OrderListFormatter    $formatter
     * @param OrdersListQueryObject $ordersList
     */
    public function __construct(
        PaginationService $paginationService,
        OrderListFormatter $formatter,
        OrdersListQueryObject $ordersList
    ) {
        $this->paginationService = $paginationService;
        $this->formatter         = $formatter;
        $this->ordersList        = $ordersList;
    }

    /**
     * @param array $params
     *
     * @return array
     */
    public function execute(array $params): array
    {
        $ordersQuery = $this->ordersList->get($params);
        $page        = $params['page'];
        $limit       = $params['limit'];

        /** @var AbstractPagination $paginator */
        $paginator  = $this->paginationService->paginate($ordersQuery, $page, $limit);
        $totalCount = $paginator->getTotalItemCount();
        $routeName  = 'api_orders_list_collection';
        $totalPage  = (int)ceil($totalCount / $paginator->getItemNumberPerPage());
        $items      = $paginator->getItems();
        $result     = [
            'data' => [],
        ];

        if (count($items) > 0) {
            $result = [
                'links' => [
                    'previous_page' => $this->paginationService->generateLink(
                        $routeName,
                        $page,
                        $totalPage,
                        $limit,
                        PaginationService::PAGE_LINK_PREVIOUS
                    ),
                    'next_page'     => $this->paginationService->generateLink(
                        $routeName,
                        $page,
                        $totalPage,
                        $limit,
                        PaginationService::PAGE_LINK_NEXT
                    ),
                    'last_page'     => $this->paginationService->generateLink(
                        $routeName,
                        $page,
                        $totalPage,
                        $limit,
                        PaginationService::PAGE_LINK_LAST
                    ),
                ],
                'meta'  => [
                    'current_page' => $page,
                    'total_pages'  => $totalPage,
                    'total_count'  => $totalCount,
                ],
                'data'  => $this->formatter->execute((array)$items),
            ];
        }

        return $result;
    }
}
