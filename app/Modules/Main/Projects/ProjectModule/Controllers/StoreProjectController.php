<?php

namespace App\Modules\Main\Projects\ProjectModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectModule\Requests\StoreProjectRequest;
use App\Modules\Main\Projects\ProjectModule\Services\StoreProjectService;
use Symfony\Component\HttpFoundation\Response;

class StoreProjectController extends Controller
{
    public function __construct(private StoreProjectService $storeProjectService) {}

    public function __invoke(StoreProjectRequest $request)
    {
        $newProject = $this->storeProjectService->__invoke($request);
        return response()->json($newProject, Response::HTTP_CREATED);
    }
}

