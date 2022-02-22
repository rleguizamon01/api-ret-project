<?php

namespace App\Modules\Main\Projects\ProjectModule\Database;

use App\Modules\Main\Projects\ProjectModule\Project;
use Database\Seeders\BaseSeeder;

class ProjectSeeder extends BaseSeeder
{
    public function run()
    {
        if(!$this->shouldRun()) return;

        Project::factory()->count(5)->create();
    }
}
