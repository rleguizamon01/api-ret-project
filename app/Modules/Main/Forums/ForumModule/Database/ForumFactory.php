<?php

namespace App\Modules\Main\Forums\ForumModule\Database;

use App\Modules\Main\Forums\ForumModule\Forum;
use Illuminate\Database\Eloquent\Factories\Factory;

class ForumFactory extends Factory
{
    protected $model = Forum::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word()
        ];
    }
}
