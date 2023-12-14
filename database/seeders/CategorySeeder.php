<?php

namespace Database\Seeders;

use App\Models\category;
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
        if (Category::count() == 0) {
            // Define an array of real category names
            $categoriesData = [
                ['name' => 'Fiction'],
                ['name' => 'Non-fiction'],
                ['name' => 'Mystery'],
                ['name' => 'Science Fiction'],
                ['name' => 'Fantasy'],
                ['name' => 'Romance'],
                ['name' => 'Biography'],
                ['name' => 'History'],
                ['name' => 'Self-Help'],
                ['name' => 'Science'],
                ['name' => 'Cooking'],
                ['name' => 'Travel'],
                ['name' => 'Poetry'],
                ['name' => 'Drama'],
                ['name' => 'Thriller'],
                ['name' => 'Horror'],
                ['name' => 'Children\'s'],
                ['name' => 'Young Adult'],
                ['name' => 'Art'],
                ['name' => 'Business'],
                ['name' => 'Health'],
                ['name' => 'Philosophy'],
                ['name' => 'Religion'],
                ['name' => 'Technology'],
                ['name' => 'Education'],
                ['name' => 'Psychology'],
                ['name' => 'Sociology'],
                ['name' => 'Fitness'],
                ['name' => 'Crafts & Hobbies'],
            ];

            // Insert the data into the categories table
            Category::insert($categoriesData);
        }
    }
}
