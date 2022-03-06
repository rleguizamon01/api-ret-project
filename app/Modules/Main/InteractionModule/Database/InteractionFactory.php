<?php

namespace App\Modules\Main\InteractionModule\Database;

use App\Modules\Main\InteractionModule\Interaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class InteractionFactory extends Factory
{
    protected $model = Interaction::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name()
        ];
    }
}
