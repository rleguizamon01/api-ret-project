<?php

namespace App\Modules\Main\Projects\ProjectDesignModule;

use App\Modules\Main\InteractionModule\Interaction;
use App\Modules\Main\Projects\ProjectDesignModule\Database\ProjectDesignFactory;
use App\Modules\Main\Projects\ProjectModule\Project;
use App\Modules\Main\UserModule\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Wildside\Userstamps\Userstamps;

class ProjectDesign extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    protected $appends = [
        'is_liked_by_auth'
    ];

    protected $fillable = [
        'project_id',
        'design_url',
        'attachments',
        'title',
        'description'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function designers()
    {
        return $this->belongsToMany(User::class,'projects_designers', 'project_design_id', 'designer_id');
    }

    public function interactions()
    {
        return $this->morphToMany(Interaction::class, 'interactable', 'interactions_users');
    }

    public function likes()
    {
        return $this->morphToMany(Interaction::class, 'interactable', 'interactions_users')
            ->where('interaction_id', Interaction::LIKE);
    }

    public function getIsLikedByAuthAttribute()
    {
        return $this->likes()->where('user_id', Auth::id())->exists();
    }

    protected static function newFactory()
    {
        return ProjectDesignFactory::new();
    }
}
