<?php

namespace App\Modules\Main\Forums\ForumModule\Database;

use App\Modules\Main\Forums\ForumModule\Forum;
use Database\Seeders\BaseSeeder;

class ForumSeeder extends BaseSeeder
{
    public function run()
    {
        if(!$this->shouldRun()) return;

        Forum::factory()->count(5)->create();
    }
}
