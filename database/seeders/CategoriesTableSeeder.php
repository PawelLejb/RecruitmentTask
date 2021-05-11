<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'PHP';
        $category->save();

        $category = new Category();
        $category->name = 'JS';
        $category->save();
        $category = new Category();
        $category->name = 'Scala';
        $category->save();
        $category = new Category();
        $category->name = 'C';
        $category->save();
        $category = new Category();
        $category->name = 'C++';
        $category->save();
    }
}
