<?php

namespace App\GP\Domain\Entity;



/**
 * OnsitePromotionLayouts
 */
class OnsitePromotionLayouts
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $layout;

    /**
     * @var \TOnsitePromotionTypes
     *
               *   @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     * })
     */
    private $type;


}
