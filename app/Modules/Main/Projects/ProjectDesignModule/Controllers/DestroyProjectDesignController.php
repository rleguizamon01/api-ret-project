<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectDesignModule\Services\DestroyProjectDesignService;
use Symfony\Component\HttpFoundation\Response;

class DestroyProjectDesignController extends Controller
{
    public function __construct(private DestroyProjectDesignService $destroyProjectDesignService) {}

    public function __invoke($id)
    {
        $this->destroyProjectDesignService->__invoke($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

