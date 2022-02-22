<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectDesignModule\Services\RestoreProjectDesignService;
use Symfony\Component\HttpFoundation\Response;

class RestoreProjectDesignController extends Controller
{
    public function __construct(private RestoreProjectDesignService $restoreProjectDesignService) {}

    public function __invoke($id)
    {
        $restoredProjectDesign = $this->restoreProjectDesignService->__invoke($id);
        return response()->json($restoredProjectDesign, Response::HTTP_OK);
    }
}
