<?php

namespace Tests;

use App\Modules\Main\UserModule\User;
use Illuminate\Database\Eloquent\Model;
use Tests\TestCase;

class CustomTestCase extends TestCase
{
    protected bool $isUserAuthenticated = true;
    protected bool $runSeeder = true;
    protected User|Model $user;

    public function setUp(): void
    {
        parent::setUp();

        if($this->runSeeder) {
            echo "running seeder! \n";
            $this->seed();
        }

        if($this->isUserAuthenticated){
            $this->user = User::factory()->create();
            $this->actingAs($this->user, 'api');
        }
    }
}
