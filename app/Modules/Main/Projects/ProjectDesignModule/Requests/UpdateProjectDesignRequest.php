<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectDesignRequest extends FormRequest
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
