<?php

namespace App\Modules\Main\Forums\ForumPostModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Forums\ForumPostModule\Services\DestroyForumPostService;
use Symfony\Component\HttpFoundation\Response;

class DestroyForumPostController extends Controller
{
    public function __construct(private DestroyForumPostService $destroyForumPostService) {}

    public function __invoke($id)
    {
        $this->destroyForumPostService->__invoke($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

