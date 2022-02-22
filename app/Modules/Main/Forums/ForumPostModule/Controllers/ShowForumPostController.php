<?php

namespace App\Modules\Main\Forums\ForumPostModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumPostModule\Services\ShowForumPostService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ShowForumPostController extends Controller
{
    public function __construct(private ShowForumPostService $showForumPostService) {}

    public function __invoke(Request $request, $id)
    {
        $forumPost = $this->showForumPostService->__invoke($request, $id);
        return response()->json($forumPost, Response::HTTP_OK);
    }
}
