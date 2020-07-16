<?php

namespace App\Containers\Supplier\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindSupplierByIdAction extends Action
{
    public function run(Request $request)
    {
        $supplier = Apiato::call('Supplier@FindSupplierByIdTask', [$request->id]);

        return $supplier;
    }
}
