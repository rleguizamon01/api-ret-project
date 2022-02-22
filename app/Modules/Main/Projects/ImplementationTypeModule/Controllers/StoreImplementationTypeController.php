<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ImplementationTypeModule\Requests\StoreImplementationTypeRequest;
use App\Modules\Main\Projects\ImplementationTypeModule\Services\StoreImplementationTypeService;
use Symfony\Component\HttpFoundation\Response;

class StoreImplementationTypeController extends Controller
{
    public function __construct(private StoreImplementationTypeService $storeImplementationTypeService) {}

    public function __invoke(StoreImplementationTypeRequest $request)
    {
        $newImplementationType = $this->storeImplementationTypeService->__invoke($request);
        return response()->json($newImplementationType, Response::HTTP_CREATED);
    }
}

