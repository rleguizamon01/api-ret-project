<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ImplementationTypeModule\Services\RestoreImplementationTypeService;
use Symfony\Component\HttpFoundation\Response;

class RestoreImplementationTypeController extends Controller
{
    public function __construct(private RestoreImplementationTypeService $restoreImplementationTypeService) {}

    public function __invoke($id)
    {
        $restoredImplementationType = $this->restoreImplementationTypeService->__invoke($id);
        return response()->json($restoredImplementationType, Response::HTTP_OK);
    }
}
