<?php

namespace Phpackage\Siigo\Api;

use Phpackage\Siigo\Client;
use Phpackage\Siigo\Exception\InternalException;
use Phpackage\Siigo\Model\Account;

final class Accounts extends AbstractApi
{
    /**
     * @param Account $account
     * @return array|null
     * @throws InternalException
     */
    public function create(Account $account)
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->post(sprintf('%s/Create?%s', $this->getModelName(), $query), $account->toArray());
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
            ->delete(sprintf('%s/Delete/%s?%s', $this->getModelName(), $id, $query));
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
     * @param string $identification
     * @param int $branchOffice
     * @return array|null
     * @throws InternalException
     */
    public function getByCode(string $identification, int $branchOffice = 0)
    {
        $query = http_build_query([
            'identification' => $identification,
            'branchOffice' => $branchOffice,
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->get(sprintf('%s/GetByCode?%s', $this->getModelName(), $query));
    }

    /**
     * @param Account $account
     * @return array|null
     * @throws InternalException
     */
    public function update(Account $account)
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->post(sprintf('%s/Update?%s', $this->getModelName(), $query), $account->toArray());
    }
}
