<?php

namespace App\Modules\Main\InteractionModule\Services;

use App\Modules\Main\InteractionModule\Interaction;

class ShowInteractionService extends CommonInteractionService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->show($request, $id));
    }

    private function show($request, $id)
    {
        return Interaction::findOrFail($id);
    }
}
