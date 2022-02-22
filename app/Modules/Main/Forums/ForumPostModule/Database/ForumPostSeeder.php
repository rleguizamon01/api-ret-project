<?php

namespace App\Modules\Main\Forums\ForumPostModule\Database;

use App\Modules\Main\Forums\ForumPostModule\ForumPost;
use Database\Seeders\BaseSeeder;

class ForumPostSeeder extends BaseSeeder
{
    public function run()
    {
        if(!$this->shouldRun()) return;

        ForumPost::factory()->count(5)->create();
    }
}
