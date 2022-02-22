<?php

namespace App\Modules\Main\Projects\ProjectModule;

use App\Modules\Main\Forums\ForumPostModule\ForumPost;
use App\Modules\Main\Projects\ProjectModule\Database\ProjectFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Project extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    protected $fillable = [
        'forum_post_id'
    ];

    public function post()
    {
        return $this->belongsTo(ForumPost::class);
    }

    protected static function newFactory()
    {
        return ProjectFactory::new();
    }
}
