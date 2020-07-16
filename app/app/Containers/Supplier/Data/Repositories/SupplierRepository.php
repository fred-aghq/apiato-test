<?php

namespace App\Containers\Supplier\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class SupplierRepository
 */
class SupplierRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
