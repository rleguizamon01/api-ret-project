<?php

namespace App\Modules\Main\Forums\ForumModule\Services;

use App\Modules\Main\Forums\ForumModule\Forum;

class DestroyForumService extends CommonForumService
{
    public function __invoke($id)
    {
        return $this->logErrors(fn() => $this->destroy($id));
    }

    private function destroy($id)
    {
        return Forum::findOrFail($id)->delete();
    }
}
