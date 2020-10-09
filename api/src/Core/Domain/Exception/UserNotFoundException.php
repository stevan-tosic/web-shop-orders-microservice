<?php

namespace App\Core\Domain\Exception;

/**
 * Class UserNotFoundException
 */
class UserNotFoundException extends Exception
{
    /**
     * UserNotFoundException constructor.
     *
     * @param string          $message
     * @param \Exception|null $previous
     */
    public function __construct($message = 'error.user.notFound', \Exception $previous = null)
    {
        parent::__construct($message, self::CODE_NOT_FOUND, $previous);
    }
}
