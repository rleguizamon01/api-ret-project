<?php

namespace Tests\Unit\Main\Projects\ProjectDesignModule;

use App\Modules\Main\UserModule\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\CustomTestCase;

class StoreProjectDesignTest extends CustomTestCase
{
    use RefreshDatabase;

    public function test_store_project_design()
    {
        $data = [
            'design_url' => 'a',
            'attachments' => '{"a":"b"}',
            'title' => 'título',
            'description' => 'descripción'
        ];

        $this->post('api/main/projects/projectDesigns', $data)
            ->assertStatus(Response::HTTP_CREATED)
            ->assertJson($data);
    }
}
