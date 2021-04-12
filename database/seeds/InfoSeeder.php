<?php

use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('infos')->insert([
            [
                'id' => 1,
                'tag_id' => 1,
                'product_id' => 1,
                'value' => 'Telecaster'
            ],
            [
                'id' => 2,
                'tag_id' => 2,
                'product_id' => 1,
                'value' => '21'
            ],
            [
                'id' => 3,
                'tag_id' => 3,
                'product_id' => 1,
                'value' => 'D Shape'
            ],
            [
                'id' => 4,
                'tag_id' => 4,
                'product_id' => 1,
                'value' => 'Chrome'
            ],
            [
                'id' => 5,
                'tag_id' => 5,
                'product_id' => 1,
                'value' => 'S/S'
            ],
            [
                'id' => 6,
                'tag_id' => 6,
                'product_id' => 1,
                'value' => 'Vintage-Style'
            ],
            [
                'id' => 7,
                'tag_id' => 1,
                'product_id' => 2,
                'value' => 'Stratocaster'
            ],
            [
                'id' => 8,
                'tag_id' => 2,
                'product_id' => 2,
                'value' => '22'
            ],
            [
                'id' => 9,
                'tag_id' => 3,
                'product_id' => 2,
                'value' => 'V Shape'
            ],
            [
                'id' => 10,
                'tag_id' => 4,
                'product_id' => 2,
                'value' => 'Chrome'
            ],
            [
                'id' => 11,
                'tag_id' => 5,
                'product_id' => 2,
                'value' => 'S/S'
            ],
            [
                'id' => 12,
                'tag_id' => 6,
                'product_id' => 2,
                'value' => 'Vintage-Style'
            ],
            [
                'id' => 13,
                'tag_id' => 1,
                'product_id' => 3,
                'value' => 'Stratocaster'
            ],
            [
                'id' => 14,
                'tag_id' => 2,
                'product_id' => 3,
                'value' => '21'
            ],
            [
                'id' => 15,
                'tag_id' => 3,
                'product_id' => 3,
                'value' => 'C Shape'
            ],
            [
                'id' => 16,
                'tag_id' => 4,
                'product_id' => 3,
                'value' => 'Chrome'
            ],
            [
                'id' => 17,
                'tag_id' => 5,
                'product_id' => 3,
                'value' => 'HSS/S'
            ],
            [
                'id' => 18,
                'tag_id' => 6,
                'product_id' => 3,
                'value' => 'Medium Jumbo'
            ],
        ]);
    }
}