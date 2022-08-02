<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Episode extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'air_date',
        'episode',
    ];

    protected $hidden = [
        "updated_at",
        "deleted_at",
    ];

    public function getAirDateAttribute($value) 
    {
        return Carbon::parse($value)->isoFormat('MMMM Do, YYYY');
    }

    protected $appends = ['url', 'characters'];

    public function getUrlAttribute()
    {
        return route('episode.show', $this->id);
    }

    public function getCharactersAttribute()
    {
        $characters     = CharacterEpisode::where('episode_id', $this->id)->get();
        return $characters->map(function($character) {
            return route('character.show', $character->character_id);
        });
    }
}
