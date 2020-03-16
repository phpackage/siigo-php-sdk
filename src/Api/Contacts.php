<?php

namespace Phpackage\Siigo\Api;

use Phpackage\Siigo\Client;
use Phpackage\Siigo\Exception\InternalException;
use Phpackage\Siigo\Model\Contact;

final class Contacts extends AbstractApi
{
    /**
     * @param Contact $contact
     * @return array|null
     * @throws InternalException
     */
    public function create(Contact $contact)
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->post(sprintf('%s/Create?%s', $this->getModelName(), $query), $contact->toArray());
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
     * @param int $accountId
     * @return array|null
     * @throws InternalException
     */
    public function getAllByAccountID(int $accountId)
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->get(sprintf('%s/GetAllByAccountID/%s?%s', $this->getModelName(), $accountId, $query));
    }

    /**
     * @param string $code
     * @return array|null
     * @throws InternalException
     */
    public function getByCode(string $code)
    {
        $query = http_build_query([
            'code' => $code,
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->get(sprintf('%s/GetByCode?%s', $this->getModelName(), $query));
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
     * @param Contact $contact
     * @return array|null
     * @throws InternalException
     */
    public function update(Contact $contact)
    {
        $query = http_build_query([
            'namespace' => Client::NAMESPACE,
        ]);

        return $this
            ->getClient()
            ->post(sprintf('%s/Update?%s', $this->getModelName(), $query), $contact->toArray());
    }
}
