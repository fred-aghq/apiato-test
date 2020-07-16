<?php

namespace App\Containers\Supplier\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllSuppliersAction extends Action
{
    public function run(Request $request)
    {
        $suppliers = Apiato::call('Supplier@GetAllSuppliersTask', [], ['addRequestCriteria']);

        return $suppliers;
    }
}
