<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectImplementationModule\Services\RestoreProjectImplementationService;
use Symfony\Component\HttpFoundation\Response;

class RestoreProjectImplementationController extends Controller
{
    public function __construct(private RestoreProjectImplementationService $restoreProjectImplementationService) {}

    public function __invoke($id)
    {
        $restoredProjectImplementation = $this->restoreProjectImplementationService->__invoke($id);
        return response()->json($restoredProjectImplementation, Response::HTTP_OK);
    }
}
