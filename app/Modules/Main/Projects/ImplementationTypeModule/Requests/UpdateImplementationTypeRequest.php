<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateImplementationTypeRequest extends FormRequest
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
