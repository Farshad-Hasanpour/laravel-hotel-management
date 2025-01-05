<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Guest::create([
            'firstname' => 'John',
            'lastname' => 'Doe'
        ]);

        \App\Models\Guest::create([
            'firstname' => 'Jane',
            'lastname' => 'Smith'
        ]);

        \App\Models\Guest::create([
            'firstname' => 'Paul',
            'lastname' => 'Smith'
        ]);
    }
}
