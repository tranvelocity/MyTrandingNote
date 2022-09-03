<?php

namespace Modules\Industry\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Core\Entities\BaseModel;

class Industry extends BaseModel
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    protected static function newFactory()
    {
        return \Modules\Industry\Database\factories\IndustryFactory::new();
    }
}
