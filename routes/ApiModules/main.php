<?php

use Illuminate\Support\Facades\Route;

Route::prefix('users')->group(function() {
    include(__DIR__ . '/../../app/Modules/Main/UserModule/user-routes.php');
});

Route::prefix('interactions')->group(function() {
    include(__DIR__ . '/../../app/Modules/Main/InteractionModule/interaction-routes.php');
});


Route::prefix('projects')->group(function() {
    include('projects.php');
});

Route::prefix('forums')->group(function() {
    include('forums.php');
});
