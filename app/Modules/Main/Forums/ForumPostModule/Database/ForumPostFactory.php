<?php

namespace App\Modules\Main\Forums\ForumPostModule\Database;

use App\Modules\Main\Forums\ForumModule\Forum;
use App\Modules\Main\Forums\ForumPostModule\ForumPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForumPostFactory extends Factory
{
    protected $model = ForumPost::class;

    public function definition(): array
    {
        return [
            'forum_id' => Forum::factory()->create(),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'attachments' => '{"test":"fakeData"}'
        ];
    }
}
