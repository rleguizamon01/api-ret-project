<?php

namespace App\Modules\Main\Forums\ForumPostModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumPostModule\Requests\UpdateForumPostRequest;
use App\Modules\Main\Forums\ForumPostModule\Services\UpdateForumPostService;
use Symfony\Component\HttpFoundation\Response;

class UpdateForumPostController extends Controller
{
    public function __construct(private UpdateForumPostService $updateForumPostService) {}

    public function __invoke(UpdateForumPostRequest $request, $id)
    {
        $updatedForumPost = $this->updateForumPostService->__invoke($request, $id);
        return response()->json($updatedForumPost, Response::HTTP_OK);
    }
}

