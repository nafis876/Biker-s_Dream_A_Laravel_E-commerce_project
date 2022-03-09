<?php

namespace Database\Seeders;

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
        //
        DB::table('users')->insert([
            'name'=>'peter parker',
            'email'=>'nkhaled162145@bscse.uiu.ac.bd',
            'password'=>Hash::make('123456789')
        ]);
    }
}
