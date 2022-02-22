<?php

namespace App\Modules\Main\Projects\ProjectModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectModule\Requests\UpdateProjectRequest;
use App\Modules\Main\Projects\ProjectModule\Services\UpdateProjectService;
use Symfony\Component\HttpFoundation\Response;

class UpdateProjectController extends Controller
{
    public function __construct(private UpdateProjectService $updateProjectService) {}

    public function __invoke(UpdateProjectRequest $request, $id)
    {
        $updatedProject = $this->updateProjectService->__invoke($request, $id);
        return response()->json($updatedProject, Response::HTTP_OK);
    }
}

