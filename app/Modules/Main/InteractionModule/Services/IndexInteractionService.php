<?php

namespace App\Modules\Main\InteractionModule\Services;

use App\Modules\Main\InteractionModule\Interaction;

class IndexInteractionService extends CommonInteractionService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->index($request));
    }

    private function index($request)
    {
        $interactions = Interaction::query();

        if($request->has('relations') && $request->relations != '*')
            $interactions->with($request->relations);
        else
            $interactions->with($this->relations);

        if($request->has('search_column'))
            $interactions->where($request->search_column, $request->search_value);

        if($request->has('order_by'))
            $interactions->orderBy($request->order_by, $request->order_direction);

        if($request->has('page'))
            return $interactions->paginate($request->page_size ?? 15);
        else
            return $interactions->get();
    }
}
