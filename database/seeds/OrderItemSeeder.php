<?php

use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_items')->insert([
            'id' => 1,
            'order_id' => 1,
            'product_id' => 3,
            'quantity' => 3
        ]);

        DB::table('order_items')->insert([
            'id' => 2,
            'order_id' => 1,
            'product_id' => 11,
            'quantity' => 1
        ]);

        DB::table('order_items')->insert([
            'id' => 3,
            'order_id' => 1,
            'product_id' => 15,
            'quantity' => 2
        ]);

        DB::table('order_items')->insert([
            'id' => 4,
            'order_id' => 2,
            'product_id' => 2,
            'quantity' => 1
        ]);

        DB::table('order_items')->insert([
            'id' => 5,
            'order_id' => 2,
            'product_id' => 14,
            'quantity' => 2
        ]);

        DB::table('order_items')->insert([
            'id' => 6,
            'order_id' => 3,
            'product_id' => 4,
            'quantity' => 2
        ]);

        DB::table('order_items')->insert([
            'id' => 7,
            'order_id' => 3,
            'product_id' => 8,
            'quantity' => 1
        ]);

        DB::table('order_items')->insert([
            'id' => 8,
            'order_id' => 3,
            'product_id' => 18,
            'quantity' => 3
        ]);

        DB::table('order_items')->insert([
            'id' => 9,
            'order_id' => 4,
            'product_id' => 10,
            'quantity' => 1
        ]);

        DB::table('order_items')->insert([
            'id' => 10,
            'order_id' => 4,
            'product_id' => 3,
            'quantity' => 3
        ]);

        DB::table('order_items')->insert([
            'id' => 11,
            'order_id' => 4,
            'product_id' => 5,
            'quantity' => 2
        ]);
    }
}