<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApiAccountsDeliveryOptions
 *
 * @ORM\Table(name="t_api_accounts_delivery_options", indexes={@ORM\Index(name="account_id_delivery_option_id", columns={"account_id", "delivery_option_id"}), @ORM\Index(name="FK_api_account_delivery_option", columns={"delivery_option_id"}), @ORM\Index(name="IDX_D9A840219B6B5FBA", columns={"account_id"})})
 * @ORM\Entity
 */
class ApiAccountsDeliveryOptions
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;

    /**
     * @var \TDeliveryOptions
     *
     * @ORM\ManyToOne(targetEntity="TDeliveryOptions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_option_id", referencedColumnName="id")
     * })
     */
    private $deliveryOption;

    /**
     * @var \TApiAccounts
     *
     * @ORM\ManyToOne(targetEntity="TApiAccounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;


}
