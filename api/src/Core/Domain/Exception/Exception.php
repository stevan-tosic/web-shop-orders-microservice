<?php

namespace App\Core\Domain\Exception;

/**
 * Base Exception class
 */
class Exception extends \Exception
{
    const CODE_BAD_REQUEST = 400;
    const CODE_FORBIDDEN = 403;
    const CODE_NOT_FOUND = 404;
    const CODE_SERVER_ERROR = 500;
}
