<?php

namespace App\Modules\Main\Projects\ImplementationTypeModule;

use App\Modules\Main\Projects\ImplementationTypeModule\Database\ImplementationTypeFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class ImplementationType extends Model
{
    use HasFactory, SoftDeletes, Userstamps;

    protected $fillable = [
    ];

    protected static function newFactory()
    {
        return ImplementationTypeFactory::new();
    }
}
