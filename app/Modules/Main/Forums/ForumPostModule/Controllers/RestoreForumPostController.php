<?php

namespace App\Modules\Main\Forums\ForumPostModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumPostModule\Services\RestoreForumPostService;
use Symfony\Component\HttpFoundation\Response;

class RestoreForumPostController extends Controller
{
    public function __construct(private RestoreForumPostService $restoreForumPostService) {}

    public function __invoke($id)
    {
        $restoredForumPost = $this->restoreForumPostService->__invoke($id);
        return response()->json($restoredForumPost, Response::HTTP_OK);
    }
}
