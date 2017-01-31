<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //php artisan db:seed
        DB::table('users')->insert([
          'name'=> 'Julian Avila',
          'email'=> 'julian326avila@hotmail.com',
          'password'=> bcrypt('oceanic815'),
        ]);

    }
}
