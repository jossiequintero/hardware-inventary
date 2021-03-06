<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Jossie Quintero Giron',
            'cedula' => '0850472366',
            'email'=>'quinterojosy@gmail.com',
            'password' => Hash::make('12345678'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
