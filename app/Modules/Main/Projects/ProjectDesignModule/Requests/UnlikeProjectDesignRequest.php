<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Requests;

use App\Modules\Main\InteractionModule\Interaction;
use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\ValidationException;

class UnlikeProjectDesignRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $this->hasntLiked();
        return [
            //
        ];
    }

    private function hasntLiked()
    {
        $projectDesign = ProjectDesign::findOrFail(Request::route('id'));

        $existsLikeFromUser = $projectDesign->likes()
            ->where('user_id', Auth::id())
            ->exists();

        if(!$existsLikeFromUser)
            throw ValidationException::withMessages([
                "The user hasn't liked the design."
            ]);
    }
}
