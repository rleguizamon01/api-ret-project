<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectImplementationModule\Services\IndexProjectImplementationService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class IndexProjectImplementationController extends Controller
{
    public function __construct(private IndexProjectImplementationService $indexProjectImplementationService) {}

    public function __invoke(Request $request)
    {
        $projectImplementations = $this->indexProjectImplementationService->__invoke($request);
        return response()->json($projectImplementations, Response::HTTP_OK);
    }
}
