<?php

namespace App\Containers\Vendor\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class VendorRepository
 */
class VendorRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
