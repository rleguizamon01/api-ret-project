<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Modules\Main\Projects\ProjectDesignModule\Controllers\IndexProjectDesignController@__invoke');
Route::get('/{id}', 'App\Modules\Main\Projects\ProjectDesignModule\Controllers\ShowProjectDesignController@__invoke');

Route::post('/', 'App\Modules\Main\Projects\ProjectDesignModule\Controllers\StoreProjectDesignController@__invoke');
Route::post('/{id}/restore', 'App\Modules\Main\Projects\ProjectDesignModule\Controllers\RestoreProjectDesignController@__invoke');

Route::put('/{id}', 'App\Modules\Main\Projects\ProjectDesignModule\Controllers\UpdateProjectDesignController@__invoke');

Route::delete('/{id}', 'App\Modules\Main\Projects\ProjectDesignModule\Controllers\DestroyProjectDesignController@__invoke');

