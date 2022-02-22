<?php

namespace App\Modules\Main\Projects\ProjectImplementationModule;

use App\Modules\Main\Projects\ProjectImplementationModule\Database\ProjectImplementationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class ProjectImplementation extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    protected $fillable = [
    ];

    protected static function newFactory()
    {
        return ProjectImplementationFactory::new();
    }
}
