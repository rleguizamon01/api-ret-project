<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\Projects\ProjectDesignModule\Requests\StoreProjectDesignRequest;
use App\Modules\Main\Projects\ProjectDesignModule\Services\StoreProjectDesignService;
use Symfony\Component\HttpFoundation\Response;

class StoreProjectDesignController extends Controller
{
    public function __construct(private StoreProjectDesignService $storeProjectDesignService) {}

    public function __invoke(StoreProjectDesignRequest $request)
    {
        $newProjectDesign = $this->storeProjectDesignService->__invoke($request);
        return response()->json($newProjectDesign, Response::HTTP_CREATED);
    }
}

