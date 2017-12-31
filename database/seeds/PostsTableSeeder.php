<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Post1',
            'slug' => 'slug',
            'image' => 'cms.png',
            'category_id' => '1',
            'user_id' => '1',
            'body' => 'lorem ipsum',
            'status' => 'PUBLISHED',
            'subtitle' => 'asjkldasd',
            'meta_content' => 'sdaklsdjkl',
            'keywords' => 'sdklaskld',
        ]);
        DB::table('posts')->insert([
            'title' => 'Post2',
            'slug' => 'slug1',
            'image' => 'cms.png',
            'category_id' => '2',
            'user_id' => '1',
            'body' => 'lorem ipsum',
            'status' => 'PUBLISHED',
            'subtitle' => 'asjkldasd',
            'meta_content' => 'sdaklsdjkl',
            'keywords' => 'sdklaskld',
        ]);
        DB::table('posts')->insert([
            'title' => 'Post3',
            'slug' => 'slug3',
            'image' => 'cms.png',
            'category_id' => '3',
            'user_id' => '1',
            'body' => 'lorem ipsum',
            'status' => 'PUBLISHED',
            'subtitle' => 'asjkldasd',
            'meta_content' => 'sdaklsdjkl',
            'keywords' => 'sdklaskld',
        ]);
        DB::table('posts')->insert([
            'title' => 'Post4',
            'slug' => 'slug4',
            'image' => 'cms.png',
            'category_id' => '1',
            'user_id' => '1',
            'body' => 'lorem ipsum',
            'status' => 'PUBLISHED',
            'subtitle' => 'asjkldasd',
            'meta_content' => 'sdaklsdjkl',
            'keywords' => 'sdklaskld',
        ]);
        DB::table('posts')->insert([
            'title' => 'Post5',
            'slug' => 'slug5',
            'image' => 'cms.png',
            'category_id' => '1',
            'user_id' => '1',
            'body' => 'lorem ipsum',
            'status' => 'PUBLISHED',
            'subtitle' => 'asjkldasd',
            'meta_content' => 'sdaklsdjkl',
            'keywords' => 'sdklaskld',
        ]);
        DB::table('posts')->insert([
            'title' => 'Post6',
            'slug' => 'slug6',
            'image' => 'cms.png',
            'category_id' => '1',
            'user_id' => '1',
            'body' => 'lorem ipsum',
            'status' => 'PUBLISHED',
            'subtitle' => 'asjkldasd',
            'meta_content' => 'sdaklsdjkl',
            'keywords' => 'sdklaskld',
        ]);

    }
}