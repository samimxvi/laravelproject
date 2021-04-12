<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'id' => 1,
            'user_id' => 2,
            'date' => Carbon::parse('2020-09-10 12:00:00'),
            'total' => 2077
        ]);

        DB::table('orders')->insert([
            'id' => 2,
            'user_id' => 2,
            'date' => Carbon::parse('2020-09-09 14:00:00'),
            'total' => 4326
        ]);

        DB::table('orders')->insert([
            'id' => 3,
            'user_id' => 3,
            'date' => Carbon::parse('2020-09-10 17:00:00'),
            'total' => 4842
        ]);

        DB::table('orders')->insert([
            'id' => 4,
            'user_id' => 4,
            'date' => Carbon::parse('2020-09-10 20:00:00'),
            'total' => 2627
        ]);
    }
}