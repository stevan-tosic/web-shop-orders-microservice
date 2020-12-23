<?php

namespace App\GP\Domain\Entity;



/**
 * PageTypes
 */
class PageTypes
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
    private $description;

    /**
     * @var bool
     */
    private $nofollow = '0';

    /**
     * @var bool
     */
    private $noindex = '0';

    /**
     * @var bool
     */
    private $sitemap = '0';


}
