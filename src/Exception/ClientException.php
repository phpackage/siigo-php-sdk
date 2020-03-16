<?php

namespace Phpackage\Siigo\Exception;

use Requests_Response;

class ClientException extends ResponseAwareException
{
    public function __construct(Requests_Response $response)
    {
        parent::__construct($response, $response->body, (int)$response->status_code);
    }
}
