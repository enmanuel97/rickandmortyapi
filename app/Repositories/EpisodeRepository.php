<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Episode;

class EpisodeRepository extends BaseRepository
{
    public function getFieldsSearchable()
    {
        return [];
    }

    public function model()
    {
        return Episode::class;
    }
}
