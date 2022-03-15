<?php

namespace Tests\Unit\Main\Projects\ProjectImplementationModule;

use App\Modules\Main\Forums\ForumPostModule\ForumPost;
use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use PHPUnit\Framework\TestCase;
use Tests\CustomTestCase;

class StoreProjectImplementationTest extends CustomTestCase
{
    use RefreshDatabase;

    public function test_store_project_implementation_with_design() {
        $projectDesign = ProjectDesign::factory()->create();

        $data = [
            'project_design_id' => $projectDesign->id,
            'description' => 'description test',
            'attachments' => '{"test":"data"}',
            'repository_url' => 'http://www.repository.com',
            'host_url' => 'http://www.repository.com'
        ];

        $this->json('POST', 'api/main/projects/projectImplementations', $data)
            ->assertStatus(Response::HTTP_CREATED)
            ->assertJson($data);
    }

    public function test_store_project_implementation_with_forum_post() {
        $forumPost =  ForumPost::factory()->create();

        $data = [
            'forum_post_id' => $forumPost->id,
            'description' => 'description test',
            'attachments' => '{"test":"data"}',
            'repository_url' => 'http://www.repository.com',
            'host_url' => 'http://www.repository.com'
        ];

        $response = $this->json('POST', 'api/main/projects/projectImplementations', $data);

        unset($data['forum_post_id']);

        $response->assertStatus(Response::HTTP_CREATED)
            ->assertJson($data);
    }


}
