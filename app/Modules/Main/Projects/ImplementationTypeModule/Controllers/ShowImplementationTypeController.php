<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ImplementationTypeModule\Services\ShowImplementationTypeService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ShowImplementationTypeController extends Controller
{
    public function __construct(private ShowImplementationTypeService $showImplementationTypeService) {}

    public function __invoke(Request $request, $id)
    {
        $implementationType = $this->showImplementationTypeService->__invoke($request, $id);
        return response()->json($implementationType, Response::HTTP_OK);
    }
}
