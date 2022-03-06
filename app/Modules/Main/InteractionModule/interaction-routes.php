<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Modules\Main\InteractionModule\Controllers\IndexInteractionController@__invoke');
Route::get('/{id}', 'App\Modules\Main\InteractionModule\Controllers\ShowInteractionController@__invoke');

Route::post('/', 'App\Modules\Main\InteractionModule\Controllers\StoreInteractionController@__invoke');
Route::post('/{id}/restore', 'App\Modules\Main\InteractionModule\Controllers\RestoreInteractionController@__invoke');

Route::put('/{id}', 'App\Modules\Main\InteractionModule\Controllers\UpdateInteractionController@__invoke');

Route::delete('/{id}', 'App\Modules\Main\InteractionModule\Controllers\DestroyInteractionController@__invoke');

