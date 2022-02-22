<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Database;

use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use Database\Seeders\BaseSeeder;

class ProjectDesignSeeder extends BaseSeeder
{
    public function run()
    {
        if(!$this->shouldRun()) return;

        ProjectDesign::factory()->count(5)->create();
    }
}
