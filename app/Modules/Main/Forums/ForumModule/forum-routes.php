<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Modules\Main\Forums\ForumModule\Controllers\IndexForumController@__invoke');
Route::get('/{id}', 'App\Modules\Main\Forums\ForumModule\Controllers\ShowForumController@__invoke');

Route::post('/', 'App\Modules\Main\Forums\ForumModule\Controllers\StoreForumController@__invoke');
Route::post('/{id}/restore', 'App\Modules\Main\Forums\ForumModule\Controllers\RestoreForumController@__invoke');

Route::put('/{id}', 'App\Modules\Main\Forums\ForumModule\Controllers\UpdateForumController@__invoke');

Route::delete('/{id}', 'App\Modules\Main\Forums\ForumModule\Controllers\DestroyForumController@__invoke');

