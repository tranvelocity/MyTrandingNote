<?php

declare(strict_types=1);

namespace Modules\Core\Entities;

use Illuminate\Database\Eloquent\Model as Eloquent;

class BaseModel extends Eloquent
{
    /**
     * Whenever this is not specified, laravel will query
     * the database to find the format. Which fails
     * whenever there is not database.
     * Hardcoding this solves the problem.
     */
    protected $dateFormat = 'Y-m-d H:i:s';
}
