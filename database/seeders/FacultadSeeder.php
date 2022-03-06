<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facultad')->insert([
            'nombre'=>'FACULTAD DE INGENIERIAS',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('facultad')->insert([
            'nombre'=>'FACULTAD DE CIENCIAS SOCIALES Y DE SERVICIOS',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('facultad')->insert([
            'nombre'=>'FACULTAD DE CIENCIAS ADMINISTRATIVAS Y ECONÓMICAS',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('facultad')->insert([
            'nombre'=>'FACULTAD DE CIENCIAS AGROPECUARIAS',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
        DB::table('facultad')->insert([
            'nombre'=>'FACULTAD DE LA PEDAGOGÍA',
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
