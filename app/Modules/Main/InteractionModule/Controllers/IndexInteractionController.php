<?php

namespace App\Modules\Main\InteractionModule\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Main\InteractionModule\Services\IndexInteractionService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexInteractionController extends Controller
{
    public function __construct(private IndexInteractionService $indexInteractionService) {}

    public function __invoke(Request $request)
    {
        $interactions = $this->indexInteractionService->__invoke($request);
        return response()->json($interactions, Response::HTTP_OK);
    }
}
