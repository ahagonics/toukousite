<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            [
                'name' => 'ファンタジー',
            ],
            [
                'name' => '恋愛',
            ],
            [
                'name' => 'アクション',

            ],
        ]);
    }
}
