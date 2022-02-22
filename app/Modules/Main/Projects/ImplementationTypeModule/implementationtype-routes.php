<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Modules\Main\Projects\ImplementationTypeModule\Controllers\IndexImplementationTypeController@__invoke');
Route::get('/{id}', 'App\Modules\Main\Projects\ImplementationTypeModule\Controllers\ShowImplementationTypeController@__invoke');

Route::post('/', 'App\Modules\Main\Projects\ImplementationTypeModule\Controllers\StoreImplementationTypeController@__invoke');
Route::post('/{id}/restore', 'App\Modules\Main\Projects\ImplementationTypeModule\Controllers\RestoreImplementationTypeController@__invoke');

Route::put('/{id}', 'App\Modules\Main\Projects\ImplementationTypeModule\Controllers\UpdateImplementationTypeController@__invoke');

Route::delete('/{id}', 'App\Modules\Main\Projects\ImplementationTypeModule\Controllers\DestroyImplementationTypeController@__invoke');

