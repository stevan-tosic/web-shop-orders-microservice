<?php declare(strict_types = 1);

namespace App\Core\Domain\Exception;

/**
 * Class AccessDeniedException
 */
class AccessDeniedException extends \Symfony\Component\Security\Core\Exception\AccessDeniedException
{
    /**
     * UserNotFoundException constructor.
     *
     * @param string          $message
     * @param \Exception|null $previous
     */
    public function __construct(string $message = 'Access Denied', ?\Exception $previous = null)
    {
        parent::__construct($message, $previous);
    }
}
