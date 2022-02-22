<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Services;

use App\Modules\Main\Projects\ImplementationTypeModule\ImplementationType;

class ShowImplementationTypeService extends CommonImplementationTypeService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->show($request, $id));
    }

    private function show($request, $id)
    {
        return ImplementationType::findOrFail($id);
    }
}
