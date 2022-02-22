<?php

use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function() {
    include('App\Modules\Main\UserModule\user-routes.php');
});

Route::prefix('projects')->group(function() {
    include('routes/ApiModules/projects.php');
});

Route::prefix('forums')->group(function() {
    include('routes/ApiModules/forums.php');
});
