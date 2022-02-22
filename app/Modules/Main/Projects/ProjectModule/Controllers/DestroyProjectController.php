<?php

namespace App\Modules\Main\Projects\ProjectModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectModule\Services\DestroyProjectService;
use Symfony\Component\HttpFoundation\Response;

class DestroyProjectController extends Controller
{
    public function __construct(private DestroyProjectService $destroyProjectService) {}

    public function __invoke($id)
    {
        $this->destroyProjectService->__invoke($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

