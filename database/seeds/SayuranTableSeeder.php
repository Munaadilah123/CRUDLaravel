<?php

use Illuminate\Database\Seeder;

class SayuranTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('sayuran')->insert($data);
    }
}
