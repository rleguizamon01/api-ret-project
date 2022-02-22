<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectDesignRequest extends FormRequest
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
