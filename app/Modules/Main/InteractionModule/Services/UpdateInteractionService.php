<?php

namespace App\Modules\Main\InteractionModule\Services;

use App\Modules\Main\InteractionModule\Interaction;

class UpdateInteractionService extends CommonInteractionService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->update($request, $id), true);
    }

    private function update($request, $id)
    {
        $interaction = Interaction::findOrFail($id);

        $interaction->update([
            //
        ]);

        return $interaction;
    }
}
