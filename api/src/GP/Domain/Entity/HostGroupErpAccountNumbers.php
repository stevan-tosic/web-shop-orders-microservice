<?php

namespace App\GP\Domain\Entity;



/**
 * HostGroupErpAccountNumbers
 */
class HostGroupErpAccountNumbers
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $accountNumber;

    private $articleType;

    /**
     * @var \THostGroups
     *
               *   @ORM\JoinColumn(name="host_group_id", referencedColumnName="id")
     * })
     */
    private $hostGroup;


}
