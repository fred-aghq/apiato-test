<?php

namespace App\Containers\Vendor\UI\API\Transformers;

use App\Containers\Vendor\Models\Vendor;
use App\Ship\Parents\Transformers\Transformer;

class VendorTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param Vendor $entity
     *
     * @return array
     */
    public function transform(Vendor $entity)
    {
        $response = [
            'object' => 'Vendor',
            'id' => $entity->getHashedKey(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
