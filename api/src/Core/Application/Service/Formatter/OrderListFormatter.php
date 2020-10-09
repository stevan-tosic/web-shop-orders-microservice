<?php declare(strict_types=1);

namespace App\Core\Application\Service\Formatter;

use App\Core\Domain\Entity\Address;
use App\Core\Domain\Entity\Host;
use App\Core\Domain\Entity\Order\Order;
use App\Core\Domain\Entity\Order\OrderLine;
use Doctrine\ORM\PersistentCollection;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class OrderListFormatter
 */
class OrderListFormatter extends BaseFormatter
{
    /**
     * OrderListFormatter constructor.
     *
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        parent::__construct($router);
    }

    /**
     * @param array $orders
     *
     * @return array
     */
    public function execute(array $orders): array
    {
        $ordersFormatted = [];

        /** @var Order $order */
        foreach ($orders as $order) {
            $billingAddressId  = $order->getBillingAddress() ? $order->getBillingAddress()->getId() : null;
            $deliveryAddressId = $order->getDeliveryAddress() ? $order->getDeliveryAddress()->getId() : null;
            $hostId            = $order->getHost() ? $order->getHost()->getId() : null;

            $ordersFormatted[] = [
                'id'                => $order->getId(),
                'billing_status'    => $order->getBillingStatus()->getName(),
                'total'             => $order->getTotal(),
                'created_at'        => $order->getCreatedAt()->format('d/m/Y'),
                'cancellation_date' => $order->getCancellationDate()
                    ? $order->getCancellationDate()->format('d/m/Y')
                    : null,
                'relationship'      => [
                    'billing_address'  => $this->generateLink('api_addresses_get_item', $billingAddressId),
                    'delivery_address' => $this->generateLink('api_addresses_get_item', $deliveryAddressId),
                    'host'             => $this->generateLink('api_hosts_get_item', $hostId),
                    'order_lines'      => $this->getOrderLinesLinks($order->getOrderLines()),
                ],
                'links'             => [
                    'self' => $this->generateLink('api_orders_get_item', $order->getId()),
                ],
            ];
        }

        return $ordersFormatted;
    }

    /**
     * @param PersistentCollection $orderLines
     *
     * @return array
     */
    private function getOrderLinesLinks(PersistentCollection $orderLines)
    {
        $orderLinesLinks = [];

        /** @var OrderLine $orderLine */
        foreach ($orderLines as $orderLine) {
            $orderLinesLinks[] = $this->generateLink('api_order_lines_get_item', $orderLine->getId());
        }

        return $orderLinesLinks;
    }

    /**
     * @param PersistentCollection $orderLines
     *
     * @return array
     */
    private function formatOrderLines(PersistentCollection $orderLines): array
    {
        $orderLinesFormatted = [];

        /** @var OrderLine $orderLine */
        foreach ($orderLines as $orderLine) {
            $orderLinesFormatted[] = [
                'tax'                            => null,
                'shipping_status'                => null,
                'article'                        => null,
                'cancellation_status'            => null,
                'price'                          => $orderLine->getPrice(),
                'created_at'                     => $orderLine->getCreatedAt()->format('d/m/Y'),
                'quantity'                       => $orderLine->getQuantity(),
                'original_price'                 => $orderLine->getOriginalPrice(),
                'checkout_article_parent_line'   => null,
                'is_standalone_checkout_article' => $orderLine->getIsStandaloneCheckoutArticle(),
            ];
        }

        return $orderLinesFormatted;
    }

    /**
     * @param Address|null $address
     *
     * @return array
     */
    private function formatAddress(?Address $address): array
    {
        $formattedAddress = [];

        if ($address instanceof Address) {
            $formattedAddress = [
                'company'           => $address->getCompany(),
                'last_name'         => $address->getLastName(),
                'first_name'        => $address->getFirstName(),
                'email'             => $address->getEmail(),
                'address1'          => $address->getAddress1(),
                'address2'          => $address->getAddress2(),
                'zip'               => $address->getZip(),
                'location'          => $address->getLocation(),
                'birth_date'        => $address->getBirthDate()->format('d/m/Y'),
                'registration_date' => $address->getRegistrationDate()->format('d/m/Y'),
                'iban'              => $address->getIban(),
                'uid'               => $address->getUid(),
                'po_number'         => $address->getPoNumber(),
                'cost_center'       => $address->getCostCenter(),
                'reference'         => $address->getReference(),
                'department'        => $address->getDepartment(),
                'title'             => $address->getTitle()->getName(),
            ];
        }

        return $formattedAddress;
    }

    /**
     * @param Host|null $host
     *
     * @return array
     */
    private function formatHost(?Host $host)
    {
        $formattedHost = [];

        if ($host instanceof Host) {
            $formattedHost = [
                'name'        => $host->getName(),
                'language'    => $host->getLanguage()->getName(),
                'description' => $host->getDescription(),
                'host'        => $host->getHost(),
                'short_name'  => $host->getShortName(),
            ];
        }

        return $formattedHost;
    }
}
