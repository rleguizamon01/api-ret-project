<?php

namespace App\Modules\Main\Forums\ForumPostModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumPostModule\Requests\StoreForumPostRequest;
use App\Modules\Main\Forums\ForumPostModule\Services\StoreForumPostService;
use Symfony\Component\HttpFoundation\Response;

class StoreForumPostController extends Controller
{
    public function __construct(private StoreForumPostService $storeForumPostService) {}

    public function __invoke(StoreForumPostRequest $request)
    {
        $newForumPost = $this->storeForumPostService->__invoke($request);
        return response()->json($newForumPost, Response::HTTP_CREATED);
    }
}

