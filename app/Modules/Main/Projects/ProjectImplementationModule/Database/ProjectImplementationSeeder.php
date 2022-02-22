<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Database;

use App\Modules\Main\Projects\ProjectImplementationModule\ProjectImplementation;
use Database\Seeders\BaseSeeder;

class ProjectImplementationSeeder extends BaseSeeder
{
    public function run()
    {
        if(!$this->shouldRun()) return;

        ProjectImplementation::factory()->count(5)->create();
    }
}
