<?php declare(strict_types=1);

namespace App\Core\Application\Service\Formatter;

use App\Core\Domain\Entity\Order\OrderLine;
use Symfony\Component\Routing\RouterInterface;

/**
 * Class OrderLineFormatter
 */
class OrderLineFormatter extends BaseFormatter
{
    /**
     * OrderLineFormatter constructor.
     *
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        parent::__construct($router);
    }

    /**
     * @param OrderLine $orderLine
     *
     * @return array
     */
    public function execute(OrderLine $orderLine): array
    {
        $taxId                = $orderLine->getTax() ? $orderLine->getTax()->getId() : null;
        $shippingStatusId     = $orderLine->getShippingStatus() ? $orderLine->getShippingStatus()->getId() : null;
        $articleId            = $orderLine->getArticle() ? $orderLine->getArticle()->getId() : null;
        $cancellationStatusId = $orderLine->getCancellationStatus() ? $orderLine->getCancellationStatus()->getId(
        ) : null;
        $hostId               = $orderLine->getHost() ? $orderLine->getHost()->getId() : null;

        return [
            'price'                          => $orderLine->getPrice(),
            'created_at'                     => $orderLine->getCreatedAt()->format('d/m/Y'),
            'quantity'                       => $orderLine->getQuantity(),
            'original_price'                 => $orderLine->getOriginalPrice(),
            'checkout_article_parent_line'   => null,
            'is_standalone_checkout_article' => $orderLine->getIsStandaloneCheckoutArticle(),
            'relationship'                   => [
                'tax'                 => $this->generateLink('api_addresses_get_item', $taxId),
                'shipping_status'     => $this->generateLink('api_addresses_get_item', $shippingStatusId),
                'article'             => $this->generateLink('api_addresses_get_item', $articleId),
                'cancellation_status' => $this->generateLink('api_addresses_get_item', $cancellationStatusId),
                'host'                => $this->generateLink('api_hosts_get_item', $hostId),
            ],
        ];
    }
}
