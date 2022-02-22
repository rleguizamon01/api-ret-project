<?php

namespace App\Modules\Main\Forums\ForumModule\Services;

use App\Modules\Main\Forums\ForumModule\Forum;

class UpdateForumService extends CommonForumService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->update($request, $id), true);
    }

    private function update($request, $id)
    {
        $forum = Forum::findOrFail($id);

        $forum->update([
            //
        ]);

        return $forum;
    }
}
