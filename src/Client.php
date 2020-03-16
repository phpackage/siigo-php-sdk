<?php

namespace Phpackage\Siigo;

use Phpackage\Siigo\Exception\AuthenticationException;
use Phpackage\Siigo\Exception\ClientException;
use Phpackage\Siigo\Exception\InternalException;
use Phpackage\Siigo\Exception\RequestException;
use Phpackage\Siigo\Exception\ServerException;
use Requests;
use Requests_Auth_Basic;
use Requests_Exception;
use Requests_Session;

final class Client
{
    public const BASE_URL = 'http://siigoapi.azure-api.net/siigo/api/v1/';
    public const NAMESPACE = 'v1';
    public const USER_AGENT = 'phpackage/siigo-php-sdk';

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var Requests_Session
     */
    private $session;

    public function __construct(string $username, string $password, string $subscriptionKey)
    {
        $this->username = $username;
        $this->password = $password;

        $this->session = new Requests_Session(self::BASE_URL, [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'User-Agent' => self::USER_AGENT,
            'Ocp-Apim-Subscription-Key' => $subscriptionKey,
        ]);
    }

    /**
     * @param string $url
     * @param array $data
     * @param array $headers
     * @param array $options
     * @return mixed|null
     * @throws InternalException
     */
    public function get(
        string $url,
        array $data = [],
        array $headers = [],
        array $options = []
    ) {
        return $this->request(Requests::GET, $url, $data, $headers, $options);
    }

    /**
     * @param string $type
     * @param string $url
     * @param array $data
     * @param array $headers
     * @param array $options
     * @return mixed|null
     * @throws InternalException
     */
    private function request(
        string $type,
        string $url,
        array $data = [],
        array $headers = [],
        array $options = []
    ) {
        $this->login();

        $options = array_merge([
            'timeout' => 60,
        ], $options);

        try {
            $response = $this
                ->session
                ->request($url, $headers, Requests::GET === $type ? $data : json_encode($data), $type, $options);
        } catch (Requests_Exception $exception) {
            throw new RequestException($exception);
        }

        if (
            $response->success
            && 200 === $response->status_code
        ) {
            return json_decode($response->body, true);
        }

        if ($response->status_code >= 400 && $response->status_code < 500) {
            throw new ClientException($response);
        }

        if ($response->status_code >= 500) {
            throw new ServerException($response);
        }

        return null;
    }

    /**
     * @throws AuthenticationException
     */
    private function login(): void
    {
        if (isset($this->session->headers['Authorization'])) {
            return;
        }

        $headers = [
            'Accept' => 'application/json',
            'Content-Type' => 'application/x-www-form-urlencoded',
            'User-Agent' => self::USER_AGENT,
        ];

        $data = [
            'grant_type' => 'password',
            'username' => $this->username,
            'password' => $this->password,
            'scope' => 'WebApi offline_access',
        ];

        try {
            $auth = new Requests_Auth_Basic([
                'SiigoWeb',
                'ABA08B6A-B56C-40A5-90CF-7C1E54891B61',
            ]);
        } catch (Requests_Exception $exception) {
            $auth = [];
        }

        $response = Requests::post(
            'https://siigonube.siigo.com:50050/connect/token',
            $headers,
            $data,
            compact('auth')
        );

        if (!$response->success || 200 !== $response->status_code) {
            throw new AuthenticationException($response);
        }

        $body = json_decode($response->body, true);

        if (
            is_array($body)
            && isset($body['access_token'])
            && is_string($body['access_token'])
            && !empty($body['access_token'])
        ) {
            $this->session->headers = array_merge($this->session->headers, [
                'Authorization' => 'Bearer ' . $body['access_token'],
            ]);

            return;
        }
    }

    /**
     * @param string $url
     * @param array $data
     * @param array $headers
     * @param array $options
     * @return mixed|null
     * @throws InternalException
     */
    public function post(
        string $url,
        array $data = [],
        array $headers = [],
        array $options = []
    ) {
        return $this->request(Requests::POST, $url, $data, $headers, $options);
    }

    /**
     * @param string $url
     * @param array $data
     * @param array $headers
     * @param array $options
     * @return array|null
     * @throws InternalException
     */
    public function delete(
        string $url,
        array $data = [],
        array $headers = [],
        array $options = []
    ) {
        return $this->request(Requests::POST, $url, $data, $headers, $options);
    }
}
