<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ImplementationTypeModule\Requests\UpdateImplementationTypeRequest;
use App\Modules\Main\Projects\ImplementationTypeModule\Services\UpdateImplementationTypeService;
use Symfony\Component\HttpFoundation\Response;

class UpdateImplementationTypeController extends Controller
{
    public function __construct(private UpdateImplementationTypeService $updateImplementationTypeService) {}

    public function __invoke(UpdateImplementationTypeRequest $request, $id)
    {
        $updatedImplementationType = $this->updateImplementationTypeService->__invoke($request, $id);
        return response()->json($updatedImplementationType, Response::HTTP_OK);
    }
}

