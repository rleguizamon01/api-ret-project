<?php

namespace App\Modules\Main\Forums\ForumPostModule\Services;

use App\Modules\Main\Forums\ForumPostModule\ForumPost;

class IndexForumPostService extends CommonForumPostService
{
    public function __invoke($request)
    {
        return $this->logErrors(fn() => $this->index($request));
    }

    private function index($request)
    {
        $forumPosts = ForumPost::query();

        if($request->has('relations') && $request->relations != '*')
            $forumPosts->with($request->relations);
        else
            $forumPosts->with($this->relations);

        if($request->has('search_column'))
            $forumPosts->where($request->search_column, $request->search_value);

        if($request->has('order_by'))
            $forumPosts->orderBy($request->order_by, $request->order_direction);

        if($request->has('page'))
            return $forumPosts->paginate($request->page_size ?? 15);
        else
            return $forumPosts->get();
    }
}
