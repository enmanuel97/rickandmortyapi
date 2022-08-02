<?php

namespace Database\Seeders;

use App\Models\Character;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Character::query()->truncate();

        Character::query()->insert([
            [
                "name"          => "Rick Sanchez",
                "status"        => "Alive",
                "species"       => "Human",
                'type'          => '',
                'gender'        => 'Male',
                'origin_id'     => 1,
                'location_id'   => 3,
                'image'         => '1.jpeg',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Morty Smith",
                "status"        => "Alive",
                "species"       => "Human",
                'type'          => '',
                'gender'        => 'Male',
                'origin_id'     => 0,
                'location_id'   => 3,
                'image'         => '2.jpeg',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Summer Smith",
                "status"        => "Alive",
                "species"       => "Human",
                'type'          => '',
                'gender'        => 'Female',
                'origin_id'     => 20,
                'location_id'   => 20,
                'image'         => '3.jpeg',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Beth Smith",
                "status"        => "Alive",
                "species"       => "Human",
                'type'          => '',
                'gender'        => 'Female',
                'origin_id'     => 20,
                'location_id'   => 20,
                'image'         => '4.jpeg',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Jerry Smith",
                "status"        => "Alive",
                "species"       => "Human",
                'type'          => '',
                'gender'        => 'Male',
                'origin_id'     => 20,
                'location_id'   => 20,
                'image'         => '5.jpeg',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Abadango Cluster Princess",
                "status"        => "Alive",
                "species"       => "Alien",
                'type'          => '',
                'gender'        => 'Female',
                'origin_id'     => 2,
                'location_id'   => 2,
                'image'         => '6.jpeg',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Abradolf Lincler",
                "status"        => "unknown",
                "species"       => "Human",
                'type'          => 'Genetic experiment"',
                'gender'        => 'Male',
                'origin_id'     => 20,
                'location_id'   => 21,
                'image'         => '7.jpeg',
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
