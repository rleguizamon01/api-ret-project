<?php

namespace App\Modules\Main\InteractionModule\Database;

use App\Modules\Main\InteractionModule\Interaction;
use Database\Seeders\BaseSeeder;

class InteractionSeeder extends BaseSeeder
{
    public function run()
    {
        if(!$this->shouldRun()) return;

        Interaction::create([
           'name' => 'like'
        ]);

        Interaction::create([
            'name' => 'save'
        ]);

        //Interaction::factory()->count(5)->create();
    }
}
