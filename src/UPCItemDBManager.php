<?php

namespace InfyOm\UPCItemDB;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class UPCItemDBManager
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @return ClientInterface
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param ClientInterface $client
     */
    public function setClient(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * UPCItemDBManager constructor.
     */
    public function __construct()
    {
        $this->initClient();
    }

    protected function initClient()
    {
        $url = config('upcitemdb.url');

        $this->client = new Client([
            'base_uri' => $url,
        ]);
    }

    /**
     * @return array
     */
    protected function getHeaders()
    {
        $headers = [
            'Content-Type' => 'application/json',
            'Accept'       => 'application/json',
        ];

        $keyType = config('upcitemdb.key_type');

        if (!empty($keyType)) {
            $headers['key_type'] = $keyType;
        }

        $userKey = config('upcitemdb.user_key');

        if (!empty($userKey)) {
            $headers['user_key'] = $userKey;
        }

        return $headers;
    }

    /**
     * @param string $upc
     *
     * @throws \Exception
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|mixed
     */
    public function lookup($upc)
    {
        $headers = $this->getHeaders();

        try {
            $response = $this->client->request('GET', 'lookup', [
                'headers' => $headers,
                'query'   => ['upc' => $upc],
            ]);
            $body = $response->getBody();

            return json_decode($body->getContents(), true);
        } catch (\Exception $exception) {
            return [
                'code'    => $exception->getCode(),
                'message' => $exception->getMessage(),
            ];
        }
    }

    /**
     * @param string|array $search
     * @param array        $options
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return array|mixed
     */
    public function search($search, $options = [])
    {
        $query = array_merge(['s' => $search], $options);

        $headers = $this->getHeaders();

        $response = null;

        try {
            $response = $this->client->request('GET', 'search', [
                'headers' => $headers,
                'query'   => $query,
            ]);
            $body = $response->getBody();

            return json_decode($body->getContents(), true);
        } catch (\Exception $exception) {
            return [
                'code'    => $exception->getCode(),
                'message' => $exception->getMessage(),
            ];
        }
    }
}
