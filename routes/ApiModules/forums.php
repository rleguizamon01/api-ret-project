<?php

use Illuminate\Support\Facades\Route;

Route::prefix('forums')->group(function() {
    include('app/Modules/Main/Forums/ForumModule/forum-routes.php');
});

Route::prefix('forumPosts')->group(function() {
    include('app/Modules/Main/Forums/ForumPostModule/forumpost-routes.php');
});
