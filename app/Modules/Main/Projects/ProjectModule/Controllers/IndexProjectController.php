<?php

namespace App\Modules\Main\Projects\ProjectModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectModule\Services\IndexProjectService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class IndexProjectController extends Controller
{
    public function __construct(private IndexProjectService $indexProjectService) {}

    public function __invoke(Request $request)
    {
        $projects = $this->indexProjectService->__invoke($request);
        return response()->json($projects, Response::HTTP_OK);
    }
}
