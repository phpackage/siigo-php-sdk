<?php

namespace Phpackage\Siigo\Api;

use Phpackage\Siigo\Client;
use Phpackage\Siigo\Exception\InternalException;

final class Product extends AbstractApi
{
    /**
     * @param array $data
     * @return array|null
     * @throws InternalException
     */
    public function create(array $data = [])
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->post('Products/Create?' . $query, $data);
    }

    /**
     * @param int $id
     * @return array|null
     * @throws InternalException
     */
    public function delete(int $id)
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->delete(sprintf('%s/%s?%s', 'Products/Delete', $id, $query));
    }

    /**
     * @param int $pageNumber
     * @return array|null
     * @throws InternalException
     */
    public function getAll(int $pageNumber = 0)
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
            'numberPage' => $pageNumber,
        ]);

        return $this
            ->getClient()
            ->get('Products/GetAll?' . $query);
    }

    /**
     * @param array $data
     * @return array|null
     * @throws InternalException
     */
    public function update(array $data = [])
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->post('Products/Update?' . $query, $data);
    }
}
