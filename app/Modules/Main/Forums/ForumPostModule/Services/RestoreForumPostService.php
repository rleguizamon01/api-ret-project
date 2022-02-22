<?php

namespace App\Modules\Main\Forums\ForumPostModule\Services;

use App\Modules\Main\Forums\ForumPostModule\ForumPost;

class RestoreForumPostService extends CommonForumPostService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->restore($id));
    }

    private function restore($id)
    {
        return ForumPost::withTrashed()->findOrFail($id)->restore();
    }
}
