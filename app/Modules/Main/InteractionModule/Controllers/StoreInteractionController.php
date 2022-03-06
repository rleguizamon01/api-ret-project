<?php

namespace App\Modules\Main\InteractionModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\InteractionModule\Requests\StoreInteractionRequest;
use App\Modules\Main\InteractionModule\Services\StoreInteractionService;
use Symfony\Component\HttpFoundation\Response;

class StoreInteractionController extends Controller
{
    public function __construct(private StoreInteractionService $storeInteractionService) {}

    public function __invoke(StoreInteractionRequest $request)
    {
        $newInteraction = $this->storeInteractionService->__invoke($request);
        return response()->json($newInteraction, Response::HTTP_CREATED);
    }
}

