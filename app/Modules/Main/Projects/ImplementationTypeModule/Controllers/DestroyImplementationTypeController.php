<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ImplementationTypeModule\Services\DestroyImplementationTypeService;
use Symfony\Component\HttpFoundation\Response;

class DestroyImplementationTypeController extends Controller
{
    public function __construct(private DestroyImplementationTypeService $destroyImplementationTypeService) {}

    public function __invoke($id)
    {
        $this->destroyImplementationTypeService->__invoke($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

