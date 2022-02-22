<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Modules\Main\Projects\ProjectImplementationModule\Controllers\IndexProjectImplementationController@__invoke');
Route::get('/{id}', 'App\Modules\Main\Projects\ProjectImplementationModule\Controllers\ShowProjectImplementationController@__invoke');

Route::post('/', 'App\Modules\Main\Projects\ProjectImplementationModule\Controllers\StoreProjectImplementationController@__invoke');
Route::post('/{id}/restore', 'App\Modules\Main\Projects\ProjectImplementationModule\Controllers\RestoreProjectImplementationController@__invoke');

Route::put('/{id}', 'App\Modules\Main\Projects\ProjectImplementationModule\Controllers\UpdateProjectImplementationController@__invoke');

Route::delete('/{id}', 'App\Modules\Main\Projects\ProjectImplementationModule\Controllers\DestroyProjectImplementationController@__invoke');

