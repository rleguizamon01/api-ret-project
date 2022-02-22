<?php

namespace App\Modules\Main\Projects\ProjectModule\Services;

use App\Modules\Main\Projects\ProjectModule\Project;

class IndexProjectService extends CommonProjectService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->index($request));
    }

    private function index($request)
    {
        $projects = Project::query();

        if($request->has('relations') && $request->relations != '*')
            $projects->with($request->relations);
        else
            $projects->with($this->relations);

        if($request->has('search_column'))
            $projects->where($request->search_column, $request->search_value);

        if($request->has('order_by'))
            $projects->orderBy($request->order_by, $request->order_direction);

        if($request->has('page'))
            return $projects->paginate($request->page_size ?? 15);
        else
            return $projects->get();
    }
}
