<?php

namespace App\Modules\Main\Forums\ForumModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumModule\Requests\UpdateForumRequest;
use App\Modules\Main\Forums\ForumModule\Services\UpdateForumService;
use Symfony\Component\HttpFoundation\Response;

class UpdateForumController extends Controller
{
    public function __construct(private UpdateForumService $updateForumService) {}

    public function __invoke(UpdateForumRequest $request, $id)
    {
        $updatedForum = $this->updateForumService->__invoke($request, $id);
        return response()->json($updatedForum, Response::HTTP_OK);
    }
}

