<?php

namespace App\Modules\Main\Projects\ProjectModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectModule\Services\RestoreProjectService;
use Symfony\Component\HttpFoundation\Response;

class RestoreProjectController extends Controller
{
    public function __construct(private RestoreProjectService $restoreProjectService) {}

    public function __invoke($id)
    {
        $restoredProject = $this->restoreProjectService->__invoke($id);
        return response()->json($restoredProject, Response::HTTP_OK);
    }
}
