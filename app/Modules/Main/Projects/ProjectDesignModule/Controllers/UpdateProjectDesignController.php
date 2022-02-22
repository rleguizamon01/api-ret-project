<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectDesignModule\Requests\UpdateProjectDesignRequest;
use App\Modules\Main\Projects\ProjectDesignModule\Services\UpdateProjectDesignService;
use Symfony\Component\HttpFoundation\Response;

class UpdateProjectDesignController extends Controller
{
    public function __construct(private UpdateProjectDesignService $updateProjectDesignService) {}

    public function __invoke(UpdateProjectDesignRequest $request, $id)
    {
        $updatedProjectDesign = $this->updateProjectDesignService->__invoke($request, $id);
        return response()->json($updatedProjectDesign, Response::HTTP_OK);
    }
}

