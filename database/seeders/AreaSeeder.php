<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('area')->insert([
            'nombre'=>'Laborario #1',
            'descripcion'=>'',
            'created_at'=> now(),
            'updated_at'=> now(),
            'id_facultad'=>1,
        ]);
        DB::table('area')->insert([
            'nombre'=>'Laborario #2',
            'descripcion'=>'',
            'created_at'=> now(),
            'updated_at'=> now(),
            'id_facultad'=>1,
        ]);
    }
}
