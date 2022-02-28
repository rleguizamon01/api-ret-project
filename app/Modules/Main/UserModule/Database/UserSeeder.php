<?php

namespace App\Modules\Main\UserModule\Database;

use App\Modules\Main\UserModule\User;
use Carbon\Carbon;
use Database\Seeders\BaseSeeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends BaseSeeder
{
    public function run()
    {
        if(!$this->shouldRun()) return;

        DB::table('users')->insert([
            'first_name' => 'Retoño',
            'last_name' => 'Admin',
            'email' => 'admin@retono.com',
            'email_verified_at' => null,
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => null,
            'deleted_at' => null,
            'created_by' => null,
            'updated_by' => null,
            'deleted_by' => null
        ]);

        DB::table('users')->insert([
            'first_name' => 'Retoño',
            'last_name' => 'Diseñador',
            'email' => 'designer@retono.com',
            'email_verified_at' => null,
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => null,
            'deleted_at' => null,
            'created_by' => null,
            'updated_by' => null,
            'deleted_by' => null
        ]);

        DB::table('users')->insert([
            'first_name' => 'Retoño',
            'last_name' => 'Dev',
            'email' => 'dev@retono.com',
            'email_verified_at' => null,
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => null,
            'deleted_at' => null,
            'created_by' => null,
            'updated_by' => null,
            'deleted_by' => null
        ]);
    }
}
