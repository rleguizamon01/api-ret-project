<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Services;

use App\Modules\Main\Projects\ImplementationTypeModule\ImplementationType;

class RestoreImplementationTypeService extends CommonImplementationTypeService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->restore($id));
    }

    private function restore($id)
    {
        return ImplementationType::withTrashed()->findOrFail($id)->restore();
    }
}
