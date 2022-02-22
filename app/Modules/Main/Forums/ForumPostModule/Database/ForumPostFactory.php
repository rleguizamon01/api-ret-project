<?php

namespace App\Modules\Main\Forums\ForumPostModule\Database;

use App\Modules\Main\Forums\ForumPostModule\ForumPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForumPostFactory extends Factory
{
    protected $model = ForumPost::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
