<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'address' => 'Admin adresa',
            'phone' => '0654567891',
            'password' => Hash::make('test12'),
            'is_admin' => true,
        ]);

        DB::table('users')->insert([
            'id' => 2,
            'name' => 'User',
            'email' => 'user@test.com',
            'address' => 'User adresa',
            'phone' => '0654567891',
            'password' => Hash::make('test12'),
        ]);

        DB::table('users')->insert([
            'id' => 3,
            'name' => 'Bojan Ilic',
            'email' => 'bojan@test.com',
            'address' => 'Kraljevica Marka 34 Beograd',
            'phone' => '0654561238',
            'password' => Hash::make('test12'),
        ]);

        DB::table('users')->insert([
            'id' => 4,
            'name' => 'Jelena Lukovic',
            'email' => 'jelena@test.com',
            'address' => 'Cara Dusana 33 Beograd',
            'phone' => '0627894561',
            'password' => Hash::make('test12'),
        ]);

        DB::table('users')->insert([
            'id' => 5,
            'name' => 'Vuk Ilic',
            'email' => 'vuk@test.com',
            'address' => 'Despotovacka 65 Beograd',
            'phone' => '0614561238',
            'password' => Hash::make('test12'),
        ]);

        DB::table('users')->insert([
            'id' => 6,
            'name' => 'Marko Markovic',
            'email' => 'marko@test.com',
            'address' => 'Makedonska 12 Nis',
            'phone' => '0648521465',
            'password' => Hash::make('test12'),
        ]);

        // factory(App\User::class, 50)->create()->each(function ($user) {
        //     $user->posts()->save(factory(App\Post::class)->make());
        // });
    }
}