<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mine')->truncate();
        DB::table('mine')->insert([
            'name' => '山田太郎',
            'age' => 26,
        ]);
    }
}
