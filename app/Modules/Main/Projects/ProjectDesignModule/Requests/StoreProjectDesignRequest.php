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
            'design_url' => 'required|string',
            'attachments' => 'required|json',
            'title' => 'required|string',
            'description' => 'required|string',
            'forum_post_id' => 'exists:forum_posts,id'
        ];
    }
}
