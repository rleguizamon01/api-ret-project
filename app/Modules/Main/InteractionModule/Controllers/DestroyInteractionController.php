<?php

namespace App\Modules\Main\InteractionModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\InteractionModule\Services\DestroyInteractionService;
use Symfony\Component\HttpFoundation\Response;

class DestroyInteractionController extends Controller
{
    public function __construct(private DestroyInteractionService $destroyInteractionService) {}

    public function __invoke($id)
    {
        $this->destroyInteractionService->__invoke($id);
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}

