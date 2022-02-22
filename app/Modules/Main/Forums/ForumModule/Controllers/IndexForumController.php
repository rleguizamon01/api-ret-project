<?php

namespace App\Modules\Main\Forums\ForumModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumModule\Services\IndexForumService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class IndexForumController extends Controller
{
    public function __construct(private IndexForumService $indexForumService) {}

    public function __invoke(Request $request)
    {
        $forums = $this->indexForumService->__invoke($request);
        return response()->json($forums, Response::HTTP_OK);
    }
}
