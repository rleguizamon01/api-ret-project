<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Services;

use App\Modules\Main\Projects\ImplementationTypeModule\ImplementationType;

class StoreImplementationTypeService extends CommonImplementationTypeService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->store($request), true);
    }

    private function store($request)
    {
        return ImplementationType::create([]);
    }
}
