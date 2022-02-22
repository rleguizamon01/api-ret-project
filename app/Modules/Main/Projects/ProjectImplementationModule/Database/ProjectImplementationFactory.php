<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Database;

use App\Modules\Main\Projects\ProjectImplementationModule\ProjectImplementation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectImplementationFactory extends Factory
{
    protected $model = ProjectImplementation::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
