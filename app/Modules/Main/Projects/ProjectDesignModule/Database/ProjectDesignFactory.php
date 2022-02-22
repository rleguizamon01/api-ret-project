<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Database;

use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectDesignFactory extends Factory
{
    protected $model = ProjectDesign::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
