<?php

use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function() {
    include(__DIR__ . '/../../app/Modules/Main/UserModule/user-routes.php');
});

Route::prefix('projects')->group(function() {
    include('../ApiModules/projects.php');
});

Route::prefix('forums')->group(function() {
    include('../ApiModules/forums.php');
});
