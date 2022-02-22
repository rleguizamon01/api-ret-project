<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectImplementationModule\Requests\UpdateProjectImplementationRequest;
use App\Modules\Main\Projects\ProjectImplementationModule\Services\UpdateProjectImplementationService;
use Symfony\Component\HttpFoundation\Response;

class UpdateProjectImplementationController extends Controller
{
    public function __construct(private UpdateProjectImplementationService $updateProjectImplementationService) {}

    public function __invoke(UpdateProjectImplementationRequest $request, $id)
    {
        $updatedProjectImplementation = $this->updateProjectImplementationService->__invoke($request, $id);
        return response()->json($updatedProjectImplementation, Response::HTTP_OK);
    }
}

