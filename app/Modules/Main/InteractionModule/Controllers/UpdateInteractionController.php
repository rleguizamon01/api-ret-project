<?php

namespace App\Modules\Main\InteractionModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\InteractionModule\Requests\UpdateInteractionRequest;
use App\Modules\Main\InteractionModule\Services\UpdateInteractionService;
use Symfony\Component\HttpFoundation\Response;

class UpdateInteractionController extends Controller
{
    public function __construct(private UpdateInteractionService $updateInteractionService) {}

    public function __invoke(UpdateInteractionRequest $request, $id)
    {
        $updatedInteraction = $this->updateInteractionService->__invoke($request, $id);
        return response()->json($updatedInteraction, Response::HTTP_OK);
    }
}

