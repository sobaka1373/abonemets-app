<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbonementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'user_name' => 'Test1',
            'plan_id' => 1,
        ]);
        DB::table('plans')->insert([
            'user_name' => 'Test2',
            'plan_id' => 2,
        ]);
        DB::table('plans')->insert([
            'user_name' => 'Test3',
            'plan_id' => 3,
        ]);
    }
}
