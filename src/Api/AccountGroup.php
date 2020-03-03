<?php

namespace Phpackage\Siigo\Api;

use Phpackage\Siigo\Client;
use Phpackage\Siigo\Exception\InternalException;

final class AccountGroup extends AbstractApi
{
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
            ->get('AccountGroups/GetAll?' . $query);
    }
}
