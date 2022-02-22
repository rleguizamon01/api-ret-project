<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule\Services;

use App\Modules\Main\Projects\ProjectImplementationModule\ProjectImplementation;

class IndexProjectImplementationService extends CommonProjectImplementationService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->index($request));
    }

    private function index($request)
    {
        $projectImplementations = ProjectImplementation::query();

        if($request->has('relations') && $request->relations != '*')
            $projectImplementations->with($request->relations);
        else
            $projectImplementations->with($this->relations);

        if($request->has('search_column'))
            $projectImplementations->where($request->search_column, $request->search_value);

        if($request->has('order_by'))
            $projectImplementations->orderBy($request->order_by, $request->order_direction);

        if($request->has('page'))
            return $projectImplementations->paginate($request->page_size ?? 15);
        else
            return $projectImplementations->get();
    }
}
