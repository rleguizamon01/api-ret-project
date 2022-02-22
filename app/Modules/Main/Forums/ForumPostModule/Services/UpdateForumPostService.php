<?php

namespace App\Modules\Main\Forums\ForumPostModule\Services;

use App\Modules\Main\Forums\ForumPostModule\ForumPost;

class UpdateForumPostService extends CommonForumPostService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->update($request, $id), true);
    }

    private function update($request, $id)
    {
        $forumPost = ForumPost::findOrFail($id);

        $forumPost->update([
            //
        ]);

        return $forumPost;
    }
}
