<?php

namespace App\Modules\Main\Projects\ProjectDesignModule\Services;

use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;

class IndexProjectDesignService extends CommonProjectDesignService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->index($request));
    }

    private function index($request)
    {
        $projectDesigns = ProjectDesign::query();

        if($request->has('relations') && $request->relations != '*')
            $projectDesigns->with($request->relations);
        else
            $projectDesigns->with($this->relations);

        if($request->filled('liked_by'))
            $projectDesigns->whereRelation('likes', 'user_id', '=', $request->liked_by);

        if($request->has('search_column'))
            $projectDesigns->where($request->search_column, $request->search_value);

        if($request->has('order_by'))
            $projectDesigns->orderBy($request->order_by, $request->order_direction);

        if($request->has('page'))
            return $projectDesigns->paginate($request->page_size ?? 15);
        else
            return $projectDesigns->get();
    }
}
