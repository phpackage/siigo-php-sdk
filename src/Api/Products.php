<?php

namespace Phpackage\Siigo\Api;

use Phpackage\Siigo\Client;
use Phpackage\Siigo\Exception\InternalException;
use Phpackage\Siigo\Model\Product;

final class Products extends AbstractApi
{
    /**
     * @param Product $product
     * @return array|null
     * @throws InternalException
     */
    public function create(Product $product)
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->post(
                sprintf('%s/Create?%s', $this->getModelName(), $query),
                $product->toArray()
            );
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
            ->delete(sprintf('%s/%s/Delete?%s', $this->getModelName(), $id, $query));
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
            ->get(sprintf('%s/GetAll?%s', $this->getModelName(), $query));
    }

    /**
     * @param int $id
     * @return array|null
     * @throws InternalException
     */
    public function getById(int $id)
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->get(sprintf('%s/GetById/%s?%s', $this->getModelName(), $id, $query));
    }

    /**
     * @param int $id
     * @return int|null
     * @throws InternalException
     */
    public function getProductBalance(int $id)
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->get(sprintf('%s/GetProductBalance/%s?%s', $this->getModelName(), $id, $query));
    }

    /**
     * @param Product $product
     * @return array|null
     * @throws InternalException
     */
    public function update(Product $product)
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->post(
                sprintf('%s/Update?%s', $this->getModelName(), $query),
                $product->toArray()
            );
    }
}
