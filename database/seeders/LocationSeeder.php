<?php

namespace Database\Seeders;

use App\Models\Location;
use Carbon\Carbon;
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
                "name"          => "Earth (C-137)",
                "type"          => "Planet",
                "dimension"     => "Dimension C-137",
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Abadango",
                "type"          => "Cluster",
                "dimension"     => "unknown",
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Citadel of Ricks",
                "type"          => "Space station",
                "dimension"     => "unknown",
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Worldender's lair",
                "type"          => "Planet",
                "dimension"     => "unknown",
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Anatomy Park",
                "type"          => "Microverse",
                "dimension"     => "Dimension C-137",
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Interdimensional Cable",
                "type"          => "TV",
                "dimension"     => "unknown",
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                "name"          => "Immortality Field Resort",
                "type"          => "Resort",
                "dimension"     => "unknown",
                'created_at'    => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
