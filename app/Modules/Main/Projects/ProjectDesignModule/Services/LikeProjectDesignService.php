<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Services;

use App\Modules\Main\InteractionModule\Interaction;
use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use Illuminate\Support\Facades\Auth;

class LikeProjectDesignService extends CommonProjectDesignService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->like($request, $id));
    }

    private function like($request, $id)
    {
        $projectDesign = ProjectDesign::findOrFail($id);

        $newInteraction = $projectDesign->interactions()->attach([
            [
                'user_id' => Auth::id(),
                'interaction_id' => Interaction::LIKE
            ]
        ]);

        return $newInteraction;
    }
}
