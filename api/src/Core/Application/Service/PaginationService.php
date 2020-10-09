<?php declare(strict_types=1);

namespace App\Core\Application\Service;

use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class PaginationService
 */
class PaginationService
{
    const PAGE_LINK_PREVIOUS = 1;
    const PAGE_LINK_NEXT = 2;
    const PAGE_LINK_LAST = 3;
    const PAGINATION_LIMIT = 10;

    /** @var PaginatorInterface $paginator */
    private $paginator;
    /** @var RouterInterface */
    private $router;
    /** @var ParameterBagInterface $params */
    private $params;

    /**
     * PaginationService constructor.
     * @param PaginatorInterface    $paginator
     * @param RouterInterface       $router
     * @param ParameterBagInterface $params
     */
    public function __construct(
        PaginatorInterface $paginator,
        RouterInterface $router,
        ParameterBagInterface $params
    ) {
        $this->paginator = $paginator;
        $this->router    = $router;
        $this->params    = $params;
    }

    /**
     * @param mixed     $entities
     * @param int       $page
     * @param int|null  $limit
     * @param bool|null $distinct
     *
     * @return PaginationInterface
     */
    public function paginate($entities, int $page, ?int $limit = null, ?bool $distinct = null): PaginationInterface
    {
        return $this->paginator->paginate(
            $entities ?? [],
            $page,
            $limit ?? $this->params->get('order')['pagination_limit'],
            [
                'distinct' => ($distinct === true),
            ]
        );
    }

    /**
     * @param $routeName
     * @param $page
     * @param $lastPage
     * @param $limit
     * @param $type
     *
     * @return string|null
     */
    public function generateLink($routeName, $page, $lastPage, $limit, $type)
    {
        $hasPreviousLink = !($page === 1 && $type === self::PAGE_LINK_PREVIOUS);
        $hasNextLink     = !($page >= $lastPage && $type === self::PAGE_LINK_NEXT);

        if (!$hasNextLink || !$hasPreviousLink) {
            return null;
        }

        if (self::PAGE_LINK_LAST !== $type) {
            $page = $type === self::PAGE_LINK_NEXT ? ++$page : --$page;
        } else {
            $page = $lastPage;
        }

        if ($limit) {
            $params['limit'] = $limit;
        }

        $params['page'] = $page;

        return $this->router->generate($routeName, $params, UrlGeneratorInterface::ABSOLUTE_URL);
    }
}
