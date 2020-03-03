<?php

namespace Phpackage\Siigo\Exception;

use Requests_Exception;

final class RequestException extends InternalException
{
    public function __construct(Requests_Exception $exception)
    {
        parent::__construct(
            $exception->getMessage(),
            $exception->getCode(),
            $exception
        );
    }
}
