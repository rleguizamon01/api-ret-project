<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectImplementationModule\Requests\StoreProjectImplementationRequest;
use App\Modules\Main\Projects\ProjectImplementationModule\Services\StoreProjectImplementationService;
use Symfony\Component\HttpFoundation\Response;

class StoreProjectImplementationController extends Controller
{
    public function __construct(private StoreProjectImplementationService $storeProjectImplementationService) {}

    public function __invoke(StoreProjectImplementationRequest $request)
    {
        $newProjectImplementation = $this->storeProjectImplementationService->__invoke($request);
        return response()->json($newProjectImplementation, Response::HTTP_CREATED);
    }
}

