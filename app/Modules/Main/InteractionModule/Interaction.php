<?php

namespace App\Modules\Main\InteractionModule;

use App\Modules\Main\InteractionModule\Database\InteractionFactory;
use App\Modules\Main\Projects\ProjectDesignModule\ProjectDesign;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Interaction extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    const LIKE = 1;
    const SAVE = 2;

    protected $fillable = [
        'name'
    ];

    public function projectDesigns()
    {
        return $this->morphedByMany(ProjectDesign::class, 'interactable', 'interactions_users');
    }

    protected static function newFactory()
    {
        return InteractionFactory::new();
    }
}
