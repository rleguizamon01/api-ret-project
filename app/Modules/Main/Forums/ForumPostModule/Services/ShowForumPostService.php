<?php

namespace App\Modules\Main\Forums\ForumPostModule\Services;

use App\Modules\Main\Forums\ForumPostModule\ForumPost;

class ShowForumPostService extends CommonForumPostService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->show($request, $id));
    }

    private function show($request, $id)
    {
        return ForumPost::findOrFail($id);
    }
}
