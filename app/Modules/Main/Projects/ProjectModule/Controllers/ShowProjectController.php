<?php

namespace App\Modules\Main\Projects\ProjectModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectModule\Services\ShowProjectService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ShowProjectController extends Controller
{
    public function __construct(private ShowProjectService $showProjectService) {}

    public function __invoke(Request $request, $id)
    {
        $project = $this->showProjectService->__invoke($request, $id);
        return response()->json($project, Response::HTTP_OK);
    }
}
