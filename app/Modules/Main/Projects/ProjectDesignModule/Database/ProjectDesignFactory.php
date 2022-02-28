<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Database;

use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use App\Modules\Main\Projects\ProjectModule\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectDesignFactory extends Factory
{
    protected $model = ProjectDesign::class;

    public function definition(): array
    {
        return [
            'project_id' => Project::factory()->create(),
            'design_url' => $this->faker->url(),
            'attachments' => '{"fake": "fakeData"}',
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph()
        ];
    }
}
