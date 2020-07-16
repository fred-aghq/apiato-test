<?php

namespace App\Containers\Supplier\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteSupplierAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Supplier@DeleteSupplierTask', [$request->id]);
    }
}
