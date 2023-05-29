<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ToukouUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('toukou_users')->insert([
            [
                'name'=>'robinson',
                'email'=>'robinson@s.com',
                'password'=> Hash::make('robinson'),
                'login_status'=> 0,

            ],
            [
                'name'=>'Koko',
                'email'=>'koko@k.com',
                'password'=> Hash::make('kokochan'),
                'login_status'=> 0,
            ],
            [
                'name'=>'kanri',
                'email'=>'kanri@g.com',
                'password'=> Hash::make('kanriman'),
                'login_status'=> 1,
            ],
        ]);
    }
}
