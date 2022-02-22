<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectImplementationRequest extends FormRequest
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
