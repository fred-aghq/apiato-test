<?php

namespace App\Containers\Supplier\UI\API\Controllers;

use App\Containers\Supplier\UI\API\Requests\CreateSupplierRequest;
use App\Containers\Supplier\UI\API\Requests\DeleteSupplierRequest;
use App\Containers\Supplier\UI\API\Requests\GetAllSuppliersRequest;
use App\Containers\Supplier\UI\API\Requests\FindSupplierByIdRequest;
use App\Containers\Supplier\UI\API\Requests\UpdateSupplierRequest;
use App\Containers\Supplier\UI\API\Transformers\SupplierTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Supplier\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateSupplierRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createSupplier(CreateSupplierRequest $request)
    {
        $supplier = Apiato::call('Supplier@CreateSupplierAction', [$request]);

        return $this->created($this->transform($supplier, SupplierTransformer::class));
    }

    /**
     * @param FindSupplierByIdRequest $request
     * @return array
     */
    public function findSupplierById(FindSupplierByIdRequest $request)
    {
        $supplier = Apiato::call('Supplier@FindSupplierByIdAction', [$request]);

        return $this->transform($supplier, SupplierTransformer::class);
    }

    /**
     * @param GetAllSuppliersRequest $request
     * @return array
     */
    public function getAllSuppliers(GetAllSuppliersRequest $request)
    {
        $suppliers = Apiato::call('Supplier@GetAllSuppliersAction', [$request]);

        return $this->transform($suppliers, SupplierTransformer::class);
    }

    /**
     * @param UpdateSupplierRequest $request
     * @return array
     */
    public function updateSupplier(UpdateSupplierRequest $request)
    {
        $supplier = Apiato::call('Supplier@UpdateSupplierAction', [$request]);

        return $this->transform($supplier, SupplierTransformer::class);
    }

    /**
     * @param DeleteSupplierRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteSupplier(DeleteSupplierRequest $request)
    {
        Apiato::call('Supplier@DeleteSupplierAction', [$request]);

        return $this->noContent();
    }
}
