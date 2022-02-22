<?php

namespace App\Modules\Main\Forums\ForumModule\Services;

use App\Modules\Main\Forums\ForumModule\Forum;

class IndexForumService extends CommonForumService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->index($request));
    }

    private function index($request)
    {
        $forums = Forum::query();

        if($request->has('relations') && $request->relations != '*')
            $forums->with($request->relations);
        else
            $forums->with($this->relations);

        if($request->has('search_column'))
            $forums->where($request->search_column, $request->search_value);

        if($request->has('order_by'))
            $forums->orderBy($request->order_by, $request->order_direction);

        if($request->has('page'))
            return $forums->paginate($request->page_size ?? 15);
        else
            return $forums->get();
    }
}
