<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectDesignModule\Requests\LikeProjectDesignRequest;
use App\Modules\Main\Projects\ProjectDesignModule\Services\LikeProjectDesignService;
use Symfony\Component\HttpFoundation\Response;

class LikeProjectDesignController extends Controller
{
    public function __construct(private LikeProjectDesignService $likeProjectDesignService) {}

    public function __invoke(LikeProjectDesignRequest $request, $id)
    {
        $newInteraction = $this->likeProjectDesignService->__invoke($request, $id);
        return response()->json($newInteraction, Response::HTTP_OK);
    }
}

