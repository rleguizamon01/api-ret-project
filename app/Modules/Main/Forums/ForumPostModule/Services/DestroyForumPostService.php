<?php

namespace App\Modules\Main\Forums\ForumPostModule\Services;

use App\Modules\Main\Forums\ForumPostModule\ForumPost;

class DestroyForumPostService extends CommonForumPostService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->destroy($id));
    }

    private function destroy($id)
    {
        return ForumPost::findOrFail($id)->delete();
    }
}
