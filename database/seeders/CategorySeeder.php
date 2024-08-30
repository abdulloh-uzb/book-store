<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name'=>'tarixiy']);
        Category::create(['name'=>'romantika']);
        Category::create(['name'=>'triller']);
        Category::create(['name'=>'detektiv']);
        Category::create(['name'=>'biografiya']);
        Category::create(['name'=>'sarguzasht']);
        Category::create(['name'=>'ertak']);


    }
}
