<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule\Services;

use App\Modules\Main\Projects\ImplementationTypeModule\ImplementationType;

class IndexImplementationTypeService extends CommonImplementationTypeService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->index($request));
    }

    private function index($request)
    {
        $implementationTypes = ImplementationType::query();

        if($request->has('relations') && $request->relations != '*')
            $implementationTypes->with($request->relations);
        else
            $implementationTypes->with($this->relations);

        if($request->has('search_column'))
            $implementationTypes->where($request->search_column, $request->search_value);

        if($request->has('order_by'))
            $implementationTypes->orderBy($request->order_by, $request->order_direction);

        if($request->has('page'))
            return $implementationTypes->paginate($request->page_size ?? 15);
        else
            return $implementationTypes->get();
    }
}
