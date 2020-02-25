<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        $categories = ['To Do', 'Doing,', 'Delayed','Done'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
