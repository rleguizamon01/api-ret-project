<?php

namespace App\Modules\Main\Forums\ForumModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumModule\Services\DestroyForumService;
use Symfony\Component\HttpFoundation\Response;

class DestroyForumController extends Controller
{
    public function __construct(private DestroyForumService $destroyForumService) {}

    public function __invoke($id)
    {
        $this->destroyForumService->__invoke($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

