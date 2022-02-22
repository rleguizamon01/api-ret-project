<?php

namespace App\Modules\Main\Forums\ForumModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumModule\Requests\StoreForumRequest;
use App\Modules\Main\Forums\ForumModule\Services\StoreForumService;
use Symfony\Component\HttpFoundation\Response;

class StoreForumController extends Controller
{
    public function __construct(private StoreForumService $storeForumService) {}

    public function __invoke(StoreForumRequest $request)
    {
        $newForum = $this->storeForumService->__invoke($request);
        return response()->json($newForum, Response::HTTP_CREATED);
    }
}

