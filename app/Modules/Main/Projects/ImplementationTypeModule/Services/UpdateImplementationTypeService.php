<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Services;

use App\Modules\Main\Projects\ImplementationTypeModule\ImplementationType;

class UpdateImplementationTypeService extends CommonImplementationTypeService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->update($request, $id), true);
    }

    private function update($request, $id)
    {
        $implementationType = ImplementationType::findOrFail($id);

        $implementationType->update([
            //
        ]);

        return $implementationType;
    }
}
