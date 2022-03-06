<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Services;

use App\Modules\Main\InteractionModule\Interaction;
use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use Illuminate\Support\Facades\Auth;

class UnlikeProjectDesignService extends CommonProjectDesignService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->unlike($request, $id));
    }

    private function unlike($request, $id)
    {
        $projectDesign = ProjectDesign::findOrFail($id);

        $unlike = $projectDesign
            ->likes()
            ->where('user_id', Auth::id())
            ->detach();

        return $unlike;
    }
}
