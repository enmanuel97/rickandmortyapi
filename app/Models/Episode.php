<?php

namespace App\Models;

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

    protected $appends = ['url', 'characters'];

    public function getUrlAttribute()
    {
        return route('episodes.show', $this->id);
    }

    public function getCharactersAttribute()
    {
        return [];
    }
}
