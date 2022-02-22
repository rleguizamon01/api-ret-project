<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectImplementationModule\Services\DestroyProjectImplementationService;
use Symfony\Component\HttpFoundation\Response;

class DestroyProjectImplementationController extends Controller
{
    public function __construct(private DestroyProjectImplementationService $destroyProjectImplementationService) {}

    public function __invoke($id)
    {
        $this->destroyProjectImplementationService->__invoke($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

