<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Modules\Main\Forums\ForumPostModule\Controllers\IndexForumPostController@__invoke');
Route::get('/{id}', 'App\Modules\Main\Forums\ForumPostModule\Controllers\ShowForumPostController@__invoke');

Route::post('/', 'App\Modules\Main\Forums\ForumPostModule\Controllers\StoreForumPostController@__invoke');
Route::post('/{id}/restore', 'App\Modules\Main\Forums\ForumPostModule\Controllers\RestoreForumPostController@__invoke');

Route::put('/{id}', 'App\Modules\Main\Forums\ForumPostModule\Controllers\UpdateForumPostController@__invoke');

Route::delete('/{id}', 'App\Modules\Main\Forums\ForumPostModule\Controllers\DestroyForumPostController@__invoke');

