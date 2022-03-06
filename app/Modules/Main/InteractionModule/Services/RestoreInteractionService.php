<?php

namespace App\Modules\Main\InteractionModule\Services;

use App\Modules\Main\InteractionModule\Interaction;

class RestoreInteractionService extends CommonInteractionService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->restore($id));
    }

    private function restore($id)
    {
        return Interaction::withTrashed()->findOrFail($id)->restore();
    }
}
