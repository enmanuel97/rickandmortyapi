<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'status',
        'species',
        'type',
        'gender',
        'origin_id',
        'location_id',
        'image',
    ];

    protected $hidden = [
        'origin_id',
        'location_id',
        "updated_at",
        "deleted_at",
    ];

    protected $appends = ['episode', 'url', 'origin', 'location'];

    public function getOriginAttribute()
    {
        $origin = Location::find($this->origin_id);

        return [
            'name'  => $origin->name,
            'url'   => route('locations.show', $origin->id),
        ];
    }

    public function getLocationAttribute()
    {
        $location = Location::find($this->location_id);

        return [
            'name'  => $location->name,
            'url'   => route('locations.show', $location->id),
        ];
    }

    public function getUrlAttribute()
    {
        return route('characters.show', $this->id);
    }

    public function getEpisodeAttribute()
    {
        return [];
    }
}
