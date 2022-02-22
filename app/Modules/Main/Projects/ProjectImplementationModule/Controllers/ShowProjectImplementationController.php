<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectImplementationModule\Services\ShowProjectImplementationService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ShowProjectImplementationController extends Controller
{
    public function __construct(private ShowProjectImplementationService $showProjectImplementationService) {}

    public function __invoke(Request $request, $id)
    {
        $projectImplementation = $this->showProjectImplementationService->__invoke($request, $id);
        return response()->json($projectImplementation, Response::HTTP_OK);
    }
}
