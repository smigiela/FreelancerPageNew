<?php

use Illuminate\Database\Seeder;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            'title' => 'Portfolio1',
            'slug' => 'slug',
            'link' => 'http://test.pl',
            'image' => 'mem_lidl.jpg',
            'body' => 'lorem ipsum',
            'meta_content' => 'meta_content1',
            'keywords' => 'slowa kluczowe sa wazne',
        ]);
        DB::table('portfolios')->insert([
            'title' => 'Portfolio2',
            'slug' => 'slug2',
            'link' => 'http://test2.pl',
            'image' => 'mem_lidl.jpg',
            'body' => 'lorem ipsum2',
            'meta_content' => 'meta_content2',
            'keywords' => 'slowa kluczowe sa wazne2',
        ]);
    }
}
