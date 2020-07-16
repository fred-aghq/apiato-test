<?php

namespace App\Containers\Supplier\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateSupplierAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $supplier = Apiato::call('Supplier@UpdateSupplierTask', [$request->id, $data]);

        return $supplier;
    }
}
