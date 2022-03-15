<?php

namespace Tests\Unit\Main\Projects\ProjectDesignModule;

use App\Modules\Main\InteractionModule\Interaction;
use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use App\Modules\Main\UserModule\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\CustomTestCase;

class LikeProjectDesignTest extends CustomTestCase
{
    use RefreshDatabase;

    public function test_like_and_unlike_project_design()
    {
        $projectDesign = ProjectDesign::factory()->create();

        $this->assertFalse($projectDesign->is_liked_by_auth);

        $this->json('POST', 'api/main/projects/projectDesigns/' . $projectDesign->id . '/like')
            ->assertStatus(Response::HTTP_OK);

        $this->assertTrue($projectDesign->is_liked_by_auth);

        $this->json('POST', 'api/main/projects/projectDesigns/' . $projectDesign->id . '/unlike')
            ->assertStatus(Response::HTTP_OK);

        $this->assertFalse($projectDesign->is_liked_by_auth);
    }

    public function test_like_project_design_twice()
    {
        $projectDesign = ProjectDesign::factory()->create();

        $this->json('POST', 'api/main/projects/projectDesigns/' . $projectDesign->id . '/like')
            ->assertStatus(Response::HTTP_OK);

        $this->json('POST', 'api/main/projects/projectDesigns/' . $projectDesign->id . '/like')
            ->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

    }

    public function test_unlike_project_design_twice()
    {
        $projectDesign = ProjectDesign::factory()->create();

        $this->json('POST', 'api/main/projects/projectDesigns/' . $projectDesign->id . '/like')
            ->assertStatus(Response::HTTP_OK);

        $this->json('POST', 'api/main/projects/projectDesigns/' . $projectDesign->id . '/unlike')
            ->assertStatus(Response::HTTP_OK);

        $this->json('POST', 'api/main/projects/projectDesigns/' . $projectDesign->id . '/unlike')
            ->assertStatus(Response::HTTP_UNPROCESSABLE_ENTITY);

    }

}
