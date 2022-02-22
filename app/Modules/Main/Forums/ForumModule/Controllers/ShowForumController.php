<?php

namespace App\Modules\Main\Forums\ForumModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumModule\Services\ShowForumService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ShowForumController extends Controller
{
    public function __construct(private ShowForumService $showForumService) {}

    public function __invoke(Request $request, $id)
    {
        $forum = $this->showForumService->__invoke($request, $id);
        return response()->json($forum, Response::HTTP_OK);
    }
}
