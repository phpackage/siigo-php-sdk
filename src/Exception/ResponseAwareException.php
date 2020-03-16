<?php

namespace Phpackage\Siigo\Exception;

use Requests_Response;

abstract class ResponseAwareException extends InternalException
{
    /**
     * @var Requests_Response
     */
    private $response;

    public function __construct(Requests_Response $response, string $message = '', int $code = 0)
    {
        parent::__construct($message, $code);
        $this->response = $response;
    }

    /**
     * @return Requests_Response
     */
    public function getResponse(): Requests_Response
    {
        return $this->response;
    }
}
