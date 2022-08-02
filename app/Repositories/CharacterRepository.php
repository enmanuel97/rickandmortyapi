<?php

namespace App\Repositories;

use App\Repositories\BaseRepository;
use App\Models\Character;

class CharacterRepository extends BaseRepository
{
    public function getFieldsSearchable()
    {
        return [];
    }

    public function model()
    {
        return Character::class;
    }
}
