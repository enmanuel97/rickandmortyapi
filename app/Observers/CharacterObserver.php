<?php

namespace App\Observers;

use App\Models\Character;
use App\Models\CharacterEpisode;
use App\Models\LocationResident;
use Illuminate\Support\Facades\Storage;

class CharacterObserver
{
    public function created(Character $character)
    {
        LocationResident::create([
            'location_id'   => $character->location_id,
            'character_id'  => $character->id,
        ]);

        if(request()->has('episodes'))
        {
            foreach(request('episodes') as $episode)
            {
                CharacterEpisode::create([
                    'character_id'  => $character->id,
                    'episode_id'    => $episode,
                ]);
            }
        }

        if ($file = request()->file('image'))
        {
            $name = $character->id.'.'.$file->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('characters/'.$name, $file, $name);

            $character->image = $name;
            $character->save();
        }
    }
}
