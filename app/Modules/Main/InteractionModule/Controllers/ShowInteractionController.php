<?php

namespace App\Modules\Main\InteractionModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\InteractionModule\Services\ShowInteractionService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShowInteractionController extends Controller
{
    public function __construct(private ShowInteractionService $showInteractionService) {}

    public function __invoke(Request $request, $id)
    {
        $interaction = $this->showInteractionService->__invoke($request, $id);
        return response()->json($interaction, Response::HTTP_OK);
    }
}
