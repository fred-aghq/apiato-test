<?php

namespace App\Containers\Supplier\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateSupplierAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $supplier = Apiato::call('Supplier@CreateSupplierTask', [$data]);

        return $supplier;
    }
}
