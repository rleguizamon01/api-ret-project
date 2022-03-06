<?php

namespace App\Modules\Main\InteractionModule\Services;

use App\Modules\Main\InteractionModule\Interaction;

class StoreInteractionService extends CommonInteractionService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->store($request), true);
    }

    private function store($request)
    {
        return Interaction::create([]);
    }
}
