<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['id' => 1, 'category' => 'Beverages', 'description' => 'Drinks and refreshments including water, soda, and juices.'],
            ['id' => 2, 'category' => 'Food', 'description' => 'Daily Food.'],
            ['id' => 3, 'category' => 'Beauty and Personal Care', 'description' => 'Products for personal hygiene and beauty care.'],
            ['id' => 4, 'category' => 'Other', 'description' => 'Miscellaneous items not categorized elsewhere.']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
