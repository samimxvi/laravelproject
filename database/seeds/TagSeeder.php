<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                'id' => 1,
                'category_id' => 1,
                'name' => 'Body Shape'
            ],
            [
                'id' => 2,
                'category_id' => 1,
                'name' => 'Frets Number'
            ],
            [
                'id' => 3,
                'category_id' => 1,
                'name' => 'Neck Shape'
            ],
            [
                'id' => 4,
                'category_id' => 1,
                'name' => 'Hardware Finish'
            ],
            [
                'id' => 5,
                'category_id' => 1,
                'name' => 'Pickup Configuration'
            ],
            [
                'id' => 6,
                'category_id' => 1,
                'name' => 'Fret Size'
            ],
            [
                'id' => 7,
                'category_id' => 2,
                'name' => 'Body shape'
            ],
            [
                'id' => 8,
                'category_id' => 2,
                'name' => 'Body Material'
            ],
            [
                'id' => 9,
                'category_id' => 2,
                'name' => 'Neck Material'
            ],
            [
                'id' => 10,
                'category_id' => 2,
                'name' => 'Frets Number'
            ],
            [
                'id' => 11,
                'category_id' => 2,
                'name' => 'Bridge'
            ],
            [
                'id' => 12,
                'category_id' => 2,
                'name' => 'Finish'
            ],
            [
                'id' => 13,
                'category_id' => 3,
                'name' => 'Body Shape'
            ],
            [
                'id' => 14,
                'category_id' => 3,
                'name' => 'Frets Number'
            ],
            [
                'id' => 15,
                'category_id' => 3,
                'name' => 'Neck Shape'
            ],
            [
                'id' => 16,
                'category_id' => 3,
                'name' => 'Hardware Finish'
            ],
            [
                'id' => 17,
                'category_id' => 3,
                'name' => 'Pickup Configuration'
            ],
            [
                'id' => 18,
                'category_id' => 3,
                'name' => 'Fret Size'
            ],
            [
                'id' => 19,
                'category_id' => 4,
                'name' => 'Bass Drum'
            ],
            [
                'id' => 20,
                'category_id' => 4,
                'name' => 'Floor Tom'
            ],
            [
                'id' => 21,
                'category_id' => 4,
                'name' => 'Tom Tom 1'
            ],
            [
                'id' => 22,
                'category_id' => 4,
                'name' => 'Tom Tom 2'
            ],
            [
                'id' => 23,
                'category_id' => 4,
                'name' => 'Shape'
            ],
            [
                'id' => 24,
                'category_id' => 5,
                'name' => 'Keys number'
            ],
            [
                'id' => 25,
                'category_id' => 5,
                'name' => 'Pedals'
            ],
            [
                'id' => 26,
                'category_id' => 5,
                'name' => 'Height'
            ],
            [
                'id' => 27,
                'category_id' => 5,
                'name' => 'Width'
            ],
            [
                'id' => 28,
                'category_id' => 5,
                'name' => 'Legnth'
            ],
            [
                'id' => 29,
                'category_id' => 5,
                'name' => 'Weight'
            ],
            [
                'id' => 30,
                'category_id' => 6,
                'name' => 'Keys Number'
            ],
            [
                'id' => 31,
                'category_id' => 6,
                'name' => 'Internal Memory'
            ],
            [
                'id' => 32,
                'category_id' => 6,
                'name' => 'Number Of Poliphony'
            ],
            [
                'id' => 33,
                'category_id' => 6,
                'name' => 'Joystick'
            ],
            [
                'id' => 34,
                'category_id' => 6,
                'name' => 'Multi Pads'
            ],
            [
                'id' => 35,
                'category_id' => 7,
                'name' => 'Type'
            ],
            [
                'id' => 36,
                'category_id' => 7,
                'name' => 'Size'
            ],
            [
                'id' => 37,
                'category_id' => 7,
                'name' => 'Bridge'
            ],
            [
                'id' => 38,
                'category_id' => 7,
                'name' => 'Body Material'
            ],
            [
                'id' => 39,
                'category_id' => 7,
                'name' => 'Strings'
            ],
        ]);
    }
}