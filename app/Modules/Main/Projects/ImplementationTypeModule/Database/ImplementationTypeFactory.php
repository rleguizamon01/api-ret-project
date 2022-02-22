<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Database;

use App\Modules\Main\Projects\ImplementationTypeModule\ImplementationType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImplementationTypeFactory extends Factory
{
    protected $model = ImplementationType::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
