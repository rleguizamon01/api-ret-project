<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectDesignModule\Requests\UnlikeProjectDesignRequest;
use App\Modules\Main\Projects\ProjectDesignModule\Services\UnlikeProjectDesignService;
use Symfony\Component\HttpFoundation\Response;

class UnlikeProjectDesignController extends Controller
{
    public function __construct(private UnlikeProjectDesignService $unlikeProjectDesignService) {}

    public function __invoke(UnlikeProjectDesignRequest $request, $id)
    {
        $projectDesigns = $this->unlikeProjectDesignService->__invoke($request, $id);
        return response()->json($projectDesigns, Response::HTTP_OK);
    }
}

