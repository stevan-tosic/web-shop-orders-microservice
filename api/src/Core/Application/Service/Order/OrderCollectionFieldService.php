<?php declare(strict_types=1);

namespace App\Core\Application\Service\Order;

use App\Core\Domain\Entity\Address;
use App\Core\Domain\Entity\BillingStatus;
use App\Core\Domain\Entity\Host;
use App\Core\Domain\Entity\Order\Order;
use App\Core\Domain\Entity\Order\OrderLine;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\AddressRepository;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\BillingStatusRepository;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\HostRepository;
use App\Core\Infrastructure\Persistence\Doctrine\Repository\OrderLineRepository;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class CompanyCollectionFieldService
 */
class OrderCollectionFieldService
{
    /** @var SerializerInterface $serializer */
    private $serializer;

    /** @var AddressRepository */
    private $addressRepository;

    /** @var HostRepository */
    private $hostRepository;

    /** @var OrderLineRepository */
    private $orderLineRepository;

    /** @var BillingStatusRepository */
    private $billingStatusRepository;

    /**
     * CompanyCollectionFieldService constructor.
     *
     * @param SerializerInterface     $serializer
     * @param AddressRepository       $addressRepository
     * @param HostRepository          $hostRepository
     * @param OrderLineRepository     $orderLineRepository
     * @param BillingStatusRepository $billingStatusRepository
     */
    public function __construct(
        SerializerInterface $serializer,
        AddressRepository $addressRepository,
        HostRepository $hostRepository,
        OrderLineRepository $orderLineRepository,
        BillingStatusRepository $billingStatusRepository
    ) {
        $this->serializer              = $serializer;
        $this->addressRepository       = $addressRepository;
        $this->hostRepository          = $hostRepository;
        $this->orderLineRepository     = $orderLineRepository;
        $this->billingStatusRepository = $billingStatusRepository;
    }

    /**
     * @param array $data
     * @param array $context
     *
     * @return Order
     */
    public function arrayToOrder(array $data, array $context = []): Order
    {
        $relations = [
            'billingStatus'   => $this->extractBillingStatusIfSet($data),
            'billingAddress'  => $this->extractBillingAddressIfSet($data),
            'deliveryAddress' => $this->extractDeliveryAddressIfSet($data),
            'host'            => $this->extractHostIfSet($data),
            'orderLine'       => $this->extractOrderLinesIfSet($data),
        ];

        /** @var Order $order */
        $order = $this->serializer->deserialize(\json_encode($data), Order::class, 'json', $context);

        if ($order instanceof Order) {
            $this->setRelations($order, $relations);
        }

        return $order;
    }

    /**
     * @param array $data
     *
     * @return BillingStatus|null
     */
    private function extractBillingStatusIfSet(array &$data): ?BillingStatus
    {
        $status = null;

        if (isset($data['billingStatus'])) {

            if (isset($data['billingStatus']['id'])) {
                /** @var BillingStatus $status */
                $status = $this->billingStatusRepository->findById($data['billingStatus']['id']);
            }

            if (!$status instanceof BillingStatus) {
                /* TODO - create new entity */
            }

            unset($data['billingStatus']);
        }

        return $status;
    }

    /**
     * @param array $data
     *
     * @return Address|null
     */
    private function extractBillingAddressIfSet(array &$data): ?Address
    {
        $address = null;

        if (isset($data['billingAddress'])) {
            if (isset($data['billingAddress']['id'])) {
                /** @var Address $address */
                $address = $this->addressRepository->findById($data['billingAddress']['id']);
            }

            if (!$address instanceof Address) {
                /* TODO - create new entity */
            }

            unset($data['billingAddress']);
        }

        return $address;
    }

    /**
     * @param array $data
     *
     * @return Address|null
     */
    private function extractDeliveryAddressIfSet(array &$data): ?Address
    {
        $address = null;

        if (isset($data['deliveryAddress'])) {
            if (isset($data['deliveryAddress']['id'])) {
                /** @var Address $address */
                $address = $this->addressRepository->findById($data['deliveryAddress']['id']);
            }

            if (!$address instanceof Address) {
                /* TODO - create new entity */
            }

            unset($data['deliveryAddress']);
        }

        return $address;
    }

    /**
     * @param array $data
     *
     * @return Host|null
     */
    private function extractHostIfSet(array &$data): ?Host
    {
        $host = null;

        if (isset($data['host'])) {
            if (isset($data['host']['id'])) {
                /** @var Host $host */
                $host = $this->hostRepository->findById($data['host']['id']);
            }

            if (!$host instanceof Host) {
                /* TODO - create new entity */
            }

            unset($data['host']);
        }

        return $host;
    }

    /**
     * @param array $data
     *
     * @return Host|null
     */
    private function extractOrderLinesIfSet(array &$data): ?array
    {
        $orderLines = null;

        if (isset($data['orderLines'])) {
            $orderLines = [];
//            foreach ($data['orderLines'] as $orderLine) {
//                $orderLines[] = $this->hostRepository->findById($orderLine);
//            }

            unset($data['orderLines']);
        }

        return $orderLines;
    }

    /**
     * @param Order $order
     * @param array $relations
     *
     * @return void
     */
    private function setRelations(Order &$order, array $relations): void
    {
        foreach ($relations as $key => $relation) {
            switch ($key) {
                case 'billingStatus':
                    if ($relation instanceof BillingStatus) {
                        $order->setBillingStatus($relation);
                    }
                    break;
                case 'billingAddress':
                    if ($relation instanceof Address) {
                        $order->setBillingAddress($relation);
                    }
                    break;
                case 'deliveryAddress':
                    if ($relation instanceof Address) {
                        $order->setDeliveryAddress($relation);
                    }
                    break;
                case 'host':
                    if ($relation instanceof Host) {
                        $order->setHost($relation);
                    }
                    break;
                case 'orderLines':
                    $this->setOrderLinesRelations($order, $relation);
                    break;
                default:
                    break;
            }
        }
    }

    /**
     * @param Order $order
     * @param array $orderLines
     */
    private function setOrderLinesRelations(Order &$order, array $orderLines): void
    {
        foreach ($orderLines as $orderLine) {
            if ($orderLine instanceof OrderLine) {
                $order->addOrderLine($orderLine);
            }
        }
    }
}
