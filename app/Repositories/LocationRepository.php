<?php

namespace App\Repositories;

use App\Models\Location;
use App\Repositories\BaseRepository;
use App\Models\Character;

class LocationRepository extends BaseRepository
{
    public function getFieldsSearchable()
    {
        return [];
    }

    public function model()
    {
        return Location::class;
    }
}
