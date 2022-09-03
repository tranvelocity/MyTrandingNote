<?php

declare(strict_types=1);

namespace Modules\Industry\Repositories;

use Modules\Industry\Entities\Industry;
use Illuminate\Support\Str;
use Modules\Core\Repositories\BaseRepository;

/**
 * An eloquent repository class for the Industry.
 * The class controls an eloquent class of Industry that is provided by constructor injection.
 */
class IndustryRepository extends BaseRepository
{
    /**
     * Retrieve Industry by id.
     */
    public function getIndustryById(int $id): Industry
    {
        return Industry::findOrFail($id);
    }

    /**
     * Retrieve Industry by uuid.
     */
    public function getIndustryByUuid(string $uuid): Industry|null
    {
        $search = Industry::query();
        return $search->where(['uuid' => $uuid])->get()->first();
    }

    /**
     * Retrieve Industry that correspond to the condition.
     */
    public function searchIndustry(array $searchCriteria): iterable
    {
        $search = Industry::query();

        if (array_key_exists('name', $searchCriteria)) {
            $search = $search->where('name', 'LIKE', '%' . $searchCriteria['name'] . '%');
            unset($searchCriteria['name']);
        }

        return $search
            ->where($searchCriteria)
            ->orderBy('created_at', 'DESC')
            ->get();
    }

    /**
     * Delete a Industry.
     */
    public function deleteIndustry(Industry $industry): void
    {
        $industry->delete();
    }

    /**
     * Update a Industry.
     */
    public function updateIndustry(Industry $industry, array $attributes): void
    {
        $this->setAttributes($industry, $attributes);
        $industry->save();
    }

    /**
     * Create a new industry.
     */
    public function createIndustry(array $attributes): Industry
    {
        $industry = new Industry();
        $this->setAttributes($industry, $attributes);
        $industry->save();

        return $industry;
    }
}
