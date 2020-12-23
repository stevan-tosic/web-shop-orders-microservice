<?php

namespace App\GP\Domain\Entity;



/**
 * ArticleLogs
 */
class ArticleLogs
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $articleId;

    /**
     * @var string|null
     */
    private $data;

    /**
     * @var string|null
     */
    private $comment;

    /**
     * @var \DateTime
     */
    private $when;

    /**
     * @var string
     */
    private $user;

    /**
     * @var int|null
     */
    private $articleVerticalId;


}
