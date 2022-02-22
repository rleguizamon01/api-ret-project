<?php

namespace App\Modules\Main\Forums\ForumModule\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreForumRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //
        ];
    }
}
