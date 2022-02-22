<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ImplementationTypeModule\Services\IndexImplementationTypeService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class IndexImplementationTypeController extends Controller
{
    public function __construct(private IndexImplementationTypeService $indexImplementationTypeService) {}

    public function __invoke(Request $request)
    {
        $implementationTypes = $this->indexImplementationTypeService->__invoke($request);
        return response()->json($implementationTypes, Response::HTTP_OK);
    }
}
