<?php

namespace App\Modules\Main\Forums\ForumModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumModule\Services\RestoreForumService;
use Symfony\Component\HttpFoundation\Response;

class RestoreForumController extends Controller
{
    public function __construct(private RestoreForumService $restoreForumService) {}

    public function __invoke($id)
    {
        $restoredForum = $this->restoreForumService->__invoke($id);
        return response()->json($restoredForum, Response::HTTP_OK);
    }
}
