<?php

namespace Database\Seeders;

use App\Modules\Main\InteractionModule\Database\InteractionSeeder;
use App\Modules\Main\InteractionModule\Interaction;
use App\Modules\Main\Projects\ProjectDesignModule\Database\ProjectDesignSeeder;
use App\Modules\Main\UserModule\Database\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Administration seeders
        $this->call([
            InteractionSeeder::class,
        ]);

        $this->call([
            UserSeeder::class,
            ProjectDesignSeeder::class
        ]);
    }
}
