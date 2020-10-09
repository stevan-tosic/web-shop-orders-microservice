<?php declare(strict_types = 1);

namespace App\Core\Domain\Exception;

/**
 * Class BadRequestException
 */
class BadRequestException extends Exception
{
    /**
     * UserNotFoundException constructor.
     *
     * @param string          $message
     * @param \Exception|null $previous
     */
    public function __construct($message = 'Bad Request', \Exception $previous = null)
    {
        parent::__construct($message, self::CODE_BAD_REQUEST, $previous);
    }
}
