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
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name'=>'sails',
                'email'=>'sails@c.com',
                'password'=> Hash::make('passwords'),
            ],
            [
                'name'=>'Koko',
                'email'=>'koko@k.com',
                'password'=> Hash::make('kokochan'),
            ],
            [
                'name'=>'kanri',
                'email'=>'kanri@g.com',
                'password'=> Hash::make('kanriman'),
            ],
        ]);
    }
}
