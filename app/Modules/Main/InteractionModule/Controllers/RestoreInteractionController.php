<?php

namespace App\Modules\Main\InteractionModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\InteractionModule\Services\RestoreInteractionService;
use Symfony\Component\HttpFoundation\Response;

class RestoreInteractionController extends Controller
{
    public function __construct(private RestoreInteractionService $restoreInteractionService) {}

    public function __invoke($id)
    {
        $restoredInteraction = $this->restoreInteractionService->__invoke($id);
        return response()->json($restoredInteraction, Response::HTTP_OK);
    }
}
