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
            'email' => 'biuro@it-solutions.opole.pl',
            'password' => bcrypt('Azzi5473ben'),
            'image' => 'smigiela.JPG',
        ]);
    }
}
