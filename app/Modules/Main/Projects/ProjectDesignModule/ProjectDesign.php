<?php

namespace App\Modules\Main\Projects\ProjectDesignModule;

use App\Modules\Main\Projects\ProjectDesignModule\Database\ProjectDesignFactory;
use App\Modules\Main\Projects\ProjectModule\Project;
use App\Modules\Main\UserModule\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class ProjectDesign extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

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

    protected static function newFactory()
    {
        return ProjectDesignFactory::new();
    }
}
