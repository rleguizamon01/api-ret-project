<?php

namespace App\Modules\Main\Forums\ForumModule\Services;

use App\Modules\Main\Forums\ForumModule\Forum;

class ShowForumService extends CommonForumService
{
    public function __invoke($request, $id)
    {
        return $this->logErrors(fn() => $this->show($request, $id));
    }

    private function show($request, $id)
    {
        return Forum::findOrFail($id);
    }
}
