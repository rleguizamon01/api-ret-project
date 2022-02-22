<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Modules\Main\Projects\ProjectModule\Controllers\IndexProjectController@__invoke');
Route::get('/{id}', 'App\Modules\Main\Projects\ProjectModule\Controllers\ShowProjectController@__invoke');

Route::post('/', 'App\Modules\Main\Projects\ProjectModule\Controllers\StoreProjectController@__invoke');
Route::post('/{id}/restore', 'App\Modules\Main\Projects\ProjectModule\Controllers\RestoreProjectController@__invoke');

Route::put('/{id}', 'App\Modules\Main\Projects\ProjectModule\Controllers\UpdateProjectController@__invoke');

Route::delete('/{id}', 'App\Modules\Main\Projects\ProjectModule\Controllers\DestroyProjectController@__invoke');

