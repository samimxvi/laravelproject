<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'id' => 1,
            'name' => 'Electric Guitar',
        ]);

        DB::table('categories')->insert([
            'id' => 2,
            'name' => 'Acoustic Guitar',
        ]);

        DB::table('categories')->insert([
            'id' => 3,
            'name' => 'Bass Guitar',
        ]);

        DB::table('categories')->insert([
            'id' => 4,
            'name' => 'Drums',
        ]);

        DB::table('categories')->insert([
            'id' => 5,
            'name' => 'Piano',
        ]);

        DB::table('categories')->insert([
            'id' => 6,
            'name' => 'Keyboards',
        ]);

        DB::table('categories')->insert([
            'id' => 7,
            'name' => 'Violin',
        ]);
    }
}