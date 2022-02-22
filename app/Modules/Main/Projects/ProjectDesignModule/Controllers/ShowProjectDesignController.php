<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectDesignModule\Services\ShowProjectDesignService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class ShowProjectDesignController extends Controller
{
    public function __construct(private ShowProjectDesignService $showProjectDesignService) {}

    public function __invoke(Request $request, $id)
    {
        $projectDesign = $this->showProjectDesignService->__invoke($request, $id);
        return response()->json($projectDesign, Response::HTTP_OK);
    }
}
