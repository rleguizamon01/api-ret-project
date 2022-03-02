<?php

use Illuminate\Support\Facades\Route;

include('ApiModules/public.php');

include('app/Modules/Auth/AuthModule/auth-routes.php');

Route::group(['middleware' => 'auth:api'], function() {

    Route::prefix('main')->group(function () {
        include('routes/ApiModules/main.php');
    });
});
