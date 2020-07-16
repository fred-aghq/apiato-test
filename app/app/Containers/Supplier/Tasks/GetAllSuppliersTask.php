<?php

namespace App\Containers\Supplier\Tasks;

use App\Containers\Supplier\Data\Repositories\SupplierRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllSuppliersTask extends Task
{

    protected $repository;

    public function __construct(SupplierRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
