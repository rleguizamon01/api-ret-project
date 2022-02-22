<?php

use Illuminate\Support\Facades\Route;

Route::prefix('projects')->group(function() {
    include('App\Modules\Main\Projects\ProjectModule\project-routes.php');
});

Route::prefix('projectDesigns')->group(function() {
    include('App\Modules\Main\Projects\ProjectDesignModule\projectdesign-routes.php');
});

Route::prefix('projectImplementations')->group(function() {
    include('App\Modules\Main\Projects\ProjectImplementationModule\projectimplementation-routes.php');
});

Route::prefix('implementationTypes')->group(function() {
    include('App\Modules\Main\Projects\ImplementationTypeModule\implementationtype-routes.php');
});
