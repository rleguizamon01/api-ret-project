<?php

use Illuminate\Support\Facades\Route;

include('ApiModules/public.php');

include(__DIR__ . '/../app/Modules/Auth/AuthModule/auth-routes.php');

Route::group(['middleware' => 'auth:api'], function() {

    Route::prefix('main')->group(function () {
        include('ApiModules/main.php');
    });
});
