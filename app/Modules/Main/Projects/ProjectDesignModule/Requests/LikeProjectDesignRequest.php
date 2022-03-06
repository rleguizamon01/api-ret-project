<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Requests;

use App\Modules\Main\InteractionModule\Interaction;
use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use App\Modules\Main\UserModule\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\ValidationException;

class LikeProjectDesignRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $this->hasAlreadyLiked();

        return [

        ];
    }

    private function hasAlreadyLiked()
    {
        $projectDesign = ProjectDesign::findOrFail(Request::route('id'));

        $existsLikeFromUser = $projectDesign->interactions()
            ->where('user_id', Auth::id())
            ->where('interaction_id', Interaction::LIKE)
            ->exists();

        if($existsLikeFromUser)
            throw ValidationException::withMessages([
                'The user has already liked the design.'
            ]);
    }
}
