<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Daniel Śmigiela',
            'email' => 'biuro@smigiela.pl',
            'password' => bcrypt('pass123'),
            'image' => 'smigiela.JPG',
        ]);
    }
}
