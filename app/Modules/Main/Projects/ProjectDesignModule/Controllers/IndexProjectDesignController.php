<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectDesignModule\Services\IndexProjectDesignService;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

class IndexProjectDesignController extends Controller
{
    public function __construct(private IndexProjectDesignService $indexProjectDesignService) {}

    public function __invoke(Request $request)
    {
        $projectDesigns = $this->indexProjectDesignService->__invoke($request);
        return response()->json($projectDesigns, Response::HTTP_OK);
    }
}
