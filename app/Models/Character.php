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
            'name'  => $origin ? $origin->name : 'unknown',
            'url'   => $origin ? route('location.show', $origin->id) : '',
        ];
    }

    public function getLocationAttribute()
    {
        $location = Location::find($this->location_id);

        return [
            'name'  => $location ? $location->name : 'unknown',
            'url'   => $location ? route('location.show', $location->id) : '',
        ];
    }

    public function getUrlAttribute()
    {
        return route('character.show', $this->id);
    }

    public function getEpisodeAttribute()
    {
        $episodes       = CharacterEpisode::where('character_id', $this->id)->get();
        return $episodes->map(function($episode) {
            return route('episode.show', $episode->episode_id);
        });
    }
}
