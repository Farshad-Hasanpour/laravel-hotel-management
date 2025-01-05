<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Room::create([
            'room_number' => 1,
            'status' => 0
        ]);

        \App\Models\Room::create([
            'room_number' => 2,
            'status' => 1
        ]);

        \App\Models\Room::create([
            'room_number' => 3,
            'status' => 2
        ]);
    }
}
