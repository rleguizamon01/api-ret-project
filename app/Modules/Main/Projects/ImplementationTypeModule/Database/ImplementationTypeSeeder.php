<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Database;

use App\Modules\Main\Projects\ImplementationTypeModule\ImplementationType;
use Database\Seeders\BaseSeeder;

class ImplementationTypeSeeder extends BaseSeeder
{
    public function run()
    {
        if(!$this->shouldRun()) return;

        ImplementationType::factory()->count(5)->create();
    }
}
