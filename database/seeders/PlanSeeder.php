<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => '1 Month',
            'days' => 30,
            'cost' => 100,
        ]);
        DB::table('plans')->insert([
            'name' => '3 Month',
            'days' => 90,
            'cost' => 250,
        ]);
        DB::table('plans')->insert([
            'name' => '1 Year',
            'days' => 365,
            'cost' => 900,
        ]);
    }
}
