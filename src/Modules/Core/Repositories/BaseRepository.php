<?php

declare(strict_types=1);

namespace Modules\Core\Repositories;

/**
 * An eloquent repository class for common module.
 */
class BaseRepository
{
    /**
     * Set attributes.
     */
    protected function setAttributes($module, array $attributes): void
    {
        $module->fill($attributes);
    }
}
