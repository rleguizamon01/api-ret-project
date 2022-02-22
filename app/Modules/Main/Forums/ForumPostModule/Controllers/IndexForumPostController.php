<?php

namespace App\Modules\Main\Forums\ForumPostModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumPostModule\Services\IndexForumPostService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class IndexForumPostController extends Controller
{
    public function __construct(private IndexForumPostService $indexForumPostService) {}

    public function __invoke(Request $request)
    {
        $forumPosts = $this->indexForumPostService->__invoke($request);
        return response()->json($forumPosts, Response::HTTP_OK);
    }
}
