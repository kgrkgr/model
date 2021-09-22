<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class personTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'tony',
            'age' => 35,
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'jack',
            'age' => 20,
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'sara',
            'age' => 45,
        ];
        DB::table('people')->insert($param);
        $param = [
            'name' => 'saly',
            'age' => 31,
        ];
        DB::table('people')->insert($param);
    }
}
