<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'dimension',
    ];

    protected $hidden = [
        "updated_at",
        "deleted_at",
    ];

    protected $appends = ['url', 'residents'];

    public function getUrlAttribute()
    {
        return route('location.show', $this->id);
    }

    public function getResidentsAttribute()
    {
        $residents     = LocationResident::where('location_id', $this->id)->get();
        return $residents->map(function($resident) {
            return route('character.show', $resident->character_id);
        });
    }
}
