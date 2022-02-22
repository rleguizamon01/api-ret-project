<?php

namespace App\Modules\Main\Forums\ForumPostModule;

use App\Modules\Main\Forums\ForumPostModule\Database\ForumPostFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class ForumPost extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    protected $fillable = [
    ];

    protected static function newFactory()
    {
        return ForumPostFactory::new();
    }
}
