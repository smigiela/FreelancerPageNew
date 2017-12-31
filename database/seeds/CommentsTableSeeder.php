<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'author_name' => 'Marian',
            'author_email' => 'maniek@gmail.com',
            'comment' => 'super strona',
            'post_id' => '1',
        ]);
        DB::table('comments')->insert([
            'author_name' => 'Marian1',
            'author_email' => 'maniek1@gmail.com',
            'comment' => 'super strona1',
            'post_id' => '2',
        ]);
        DB::table('comments')->insert([
            'author_name' => 'Marian2',
            'author_email' => 'maniek2@gmail.com',
            'comment' => 'super strona2',
            'post_id' => '1',
        ]);
        DB::table('comments')->insert([
            'author_name' => 'Marian3',
            'author_email' => 'manie43@gmail.com',
            'comment' => 'super strona43',
            'post_id' => '1',
        ]);
    }
}
