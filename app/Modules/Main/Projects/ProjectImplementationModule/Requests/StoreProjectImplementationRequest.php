<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectImplementationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'forum_post_id' => 'required_without:project_design_id|prohibits:project_design_id|exists:forum_posts,id',
            'project_design_id' => 'required_without:forum_post_id|prohibits:forum_post_id|exists:project_designs,id',
            'description' => 'required|string',
            'attachments' => 'required|json',
            'repository_url' => 'required|url',
            'host_url' => 'required|url'
        ];
    }
}
