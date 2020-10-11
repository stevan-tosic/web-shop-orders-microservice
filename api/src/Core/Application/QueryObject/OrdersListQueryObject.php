<?php declare(strict_types=1);

namespace App\Core\Application\QueryObject;

use App\Core\Domain\Entity\Address;
use App\Core\Domain\Entity\Order\Order;
use App\Core\Domain\Entity\Order\OrderLine;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;
use Doctrine\ORM\QueryBuilder;

/**
 * Class OrdersListQueryObject
 */
class OrdersListQueryObject
{
    /** @var EntityManagerInterface $entityManager */
    protected $entityManager;

    /**
     * OrdersListQueryObject constructor.
     *
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param $params
     *
     * @return Query
     */
    public function get($params): Query
    {
        $query = $this->entityManager->createQueryBuilder()
            ->from(Order::class, 'o')
            ->select('o')
            ->where('o.isActive = :active');

        $query = $this->addFilterQuery($query, $params);

        $query
            ->leftJoin(OrderLine::class, 'ol', 'WITH', 'o.id = ol.order')
            ->leftJoin(Address::class, 'ba', 'WITH', 'o.billingAddress = ba.id')
            ->leftJoin(Address::class, 'da', 'WITH', 'o.deliveryAddress = da.id')
            ->setParameter('active', true);

        $query = $this->addOrderByQuery($query, $params);

        return $query->getQuery();
    }

    /**
     * @param QueryBuilder $query
     * @param array        $params
     *
     * @return QueryBuilder
     */
    private function addFilterQuery(QueryBuilder $query, array $params): QueryBuilder
    {
        if (!\is_array($params['filter'])) {
            return $query;
        }

        foreach ($params['filter'] as $condition) {
            $property   = $this->getDqlProperty($condition['property']);
            $expression = $condition['expression'];

            if (!$property || !$expression || !method_exists($query->expr(), $expression)) {
                continue;
            }

            $query->andWhere(
                $query->expr()->$expression($property, $condition['value'])
            );
        }

        return $query;
    }

    /**
     * @param string $property
     *
     * @return string
     */
    private function getDqlProperty(string $property): string
    {
        $dqlProperty = '';

        switch ($property) {
            case 'id':
                $dqlProperty = 'o.id';
                break;
            case 'total':
                $dqlProperty = 'o.total';
                break;
            case 'lastName':
                $dqlProperty = 'ba.lastName';
                break;
            case 'firstName':
                $dqlProperty = 'ba.firstName';
                break;
            case 'address':
                $dqlProperty = 'ba.address1';
                break;
            /* TODO - add more searchable fields */
            default:
                break;
        }

        return $dqlProperty;
    }

    /**
     * @param QueryBuilder $query
     * @param array        $filter
     *
     * @return QueryBuilder
     */
    private function addOrderByQuery(QueryBuilder $query, array $filter): QueryBuilder
    {
        if ($filter['sort']) {
            $sortingFields = \explode(",", $filter['sort']);

            foreach ($sortingFields as $field) {
                $isDesc = substr($field, 0, 1) === '-';

                switch ($field) {
                    case \strpos($field, 'id') !== false:
                        $query->addOrderBy('o.id', $isDesc ? 'DESC' : 'ASC');
                        break;
                    case \strpos($field, 'total') !== false:
                        $query->addOrderBy('o.total', $isDesc ? 'DESC' : 'ASC');
                        break;
                    case \strpos($field, 'email') !== false:
                        $order = $isDesc ? 'DESC' : 'ASC';
                        $query->addOrderBy('ba.email', $order);
                        $query->addOrderBy('da.email', $order);
                        break;
                    /* TODO - add more sortable fields */
                    default:
                        break;
                }
            }
        }

        return $query;
    }
}
