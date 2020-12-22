<?php

namespace App\GP\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApiAccountFunctions
 *
 * @ORM\Table(name="t_api_account_functions", indexes={@ORM\Index(name="t_api_account_functions_t_api_accounts_id_fk", columns={"account_id"}), @ORM\Index(name="t_api_account_functions_t_api_functions_id_fk", columns={"function_id"})})
 * @ORM\Entity
 */
class ApiAccountFunctions
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
     * @var \TApiAccounts
     *
     * @ORM\ManyToOne(targetEntity="TApiAccounts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="account_id", referencedColumnName="id")
     * })
     */
    private $account;

    /**
     * @var \TApiFunctions
     *
     * @ORM\ManyToOne(targetEntity="TApiFunctions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="function_id", referencedColumnName="id")
     * })
     */
    private $function;


}
