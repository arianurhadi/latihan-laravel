<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Novel', 'Comic', 'Self Help', 'Craft', 'Leadership', 'Science', 'Poetry'];

        foreach($categories as $category){
            \App\Models\Category::create([
                'name' => $category
            ]);
        }
    }
}
