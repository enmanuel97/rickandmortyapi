<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Location::query()->truncate();
        Location::query()->insert([
            [
                "name"      => "Earth (C-137)",
                "type"      => "Planet",
                "dimension" => "Dimension C-137",
            ],
            [
                "name"      => "Abadango",
                "type"      => "Cluster",
                "dimension" => "unknown",
            ],
            [
                "name"      => "Citadel of Ricks",
                "type"      => "Space station",
                "dimension" => "unknown",
            ],
            [
                "name"      => "Worldender's lair",
                "type"      => "Planet",
                "dimension" => "unknown",
            ],
            [
                "name"      => "Anatomy Park",
                "type"      => "Microverse",
                "dimension" => "Dimension C-137",
            ],
            [
                "name"      => "Interdimensional Cable",
                "type"      => "TV",
                "dimension" => "unknown",
            ],
            [
                "name"      => "Immortality Field Resort",
                "type"      => "Resort",
                "dimension" => "unknown",
            ]
        ]);
    }
}
