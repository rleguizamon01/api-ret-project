<?php

namespace App\Modules\Main\Forums\ForumModule\Services;

use App\Modules\Main\Forums\ForumModule\Forum;

class RestoreForumService extends CommonForumService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->restore($id));
    }

    private function restore($id)
    {
        return Forum::withTrashed()->findOrFail($id)->restore();
    }
}
