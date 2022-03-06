<?php

use Illuminate\Support\Facades\Route;

Route::prefix('projects')->group(function() {
    include(__DIR__ . '/../../app/Modules/Main/Projects/ProjectModule/project-routes.php');
});

Route::prefix('projectDesigns')->group(function() {
    include(__DIR__ . '/../../app/Modules/Main/Projects/ProjectDesignModule/projectdesign-routes.php');
});

Route::prefix('projectImplementations')->group(function() {
    include(__DIR__ . '/../../app/Modules/Main/Projects/ProjectImplementationModule/projectimplementation-routes.php');
});

Route::prefix('implementationTypes')->group(function() {
    include(__DIR__ . '/../../app/Modules/Main/Projects/ImplementationTypeModule/implementationtype-routes.php');
});
