<?php

namespace App\Modules\Main\Forums\ForumModule;

use App\Modules\Main\Forums\ForumModule\Database\ForumFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class Forum extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    protected $fillable = [
        'title'
    ];

    protected static function newFactory()
    {
        return ForumFactory::new();
    }
}
