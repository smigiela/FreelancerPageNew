<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Programowanie',
            'description' => 'Kategoria dotyczy programowania'
        ]);

        DB::table('categories')->insert([
            'name' => 'Informacje',
            'description' => 'Kategoria dotyczy informacji'
        ]);

        DB::table('categories')->insert([
            'name' => 'Porady',
            'description' => 'Kategoria dotyczy porad'
        ]);
        DB::table('categories')->insert([
            'name' => 'Test',
            'description' => 'Kategoria test jeden'
        ]);
        DB::table('categories')->insert([
            'name' => 'Test2',
            'description' => 'Kategoria test 2'
        ]);
    }
}
