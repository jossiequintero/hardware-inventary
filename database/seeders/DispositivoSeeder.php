<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DispositivoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('dispositivo')->insert([
           'tipo'=>'Computadora',
           'descripcion'=>'Escritorio',
           'marca'=>''
       ]);
    }
}
