<?php

namespace App\Modules\Main\Projects\ProjectModule\Database;

use App\Modules\Main\Projects\ProjectModule\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
