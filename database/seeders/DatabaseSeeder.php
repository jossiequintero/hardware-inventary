<?php

namespace Database\Seeders;

use App\Models\Facultad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(FacultadSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(UserSeeder::class);
    }
}
