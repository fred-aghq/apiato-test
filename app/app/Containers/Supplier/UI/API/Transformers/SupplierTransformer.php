<?php

namespace App\Containers\Supplier\UI\API\Transformers;

use App\Containers\Supplier\Models\Supplier;
use App\Ship\Parents\Transformers\Transformer;

class SupplierTransformer extends Transformer
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
     * @param Supplier $entity
     *
     * @return array
     */
    public function transform(Supplier $entity)
    {
        $response = [
            'object' => 'Supplier',
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
