<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Services;

use App\Modules\Main\Projects\ImplementationTypeModule\ImplementationType;

class DestroyImplementationTypeService extends CommonImplementationTypeService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->destroy($id));
    }

    private function destroy($id)
    {
        return ImplementationType::findOrFail($id)->delete();
    }
}
