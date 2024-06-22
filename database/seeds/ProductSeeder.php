<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['id' => 1, 'name' => 'Water', 'price' => 'RM 1.50'],
            ['id' => 2, 'name' => 'Soda', 'price' => 'RM 2.00'],
            ['id' => 3, 'name' => 'Juice', 'price' => 'RM 2.50'],
            ['id' => 4, 'name' => 'Milk', 'price' => 'RM 5.00'],
            ['id' => 5, 'name' => 'Coffee', 'price' => 'RM 4.00'],
            ['id' => 6, 'name' => 'Rice', 'price' => 'RM 30.00'],
            ['id' => 7, 'name' => 'Chicken', 'price' => 'RM 15.00'],
            ['id' => 8, 'name' => 'Potato', 'price' => 'RM 10.00'],
            ['id' => 9, 'name' => 'Carrot', 'price' => 'RM 6.00'],
            ['id' => 10, 'name' => 'Meat', 'price' => 'RM 20.00'],
            ['id' => 11, 'name' => 'Body Wash', 'price' => 'RM 9.00'],
            ['id' => 12, 'name' => 'Shampoo', 'price' => 'RM 8.00'],
            ['id' => 13, 'name' => 'Deodorant', 'price' => 'RM 4.90'],
            ['id' => 14, 'name' => 'Perfume', 'price' => 'RM 11.00'],
            ['id' => 15, 'name' => 'Face powder', 'price' => 'RM 6.00'],
            ['id' => 16, 'name' => 'Snack', 'price' => 'RM 3.00'],
            ['id' => 17, 'name' => 'Biscuit', 'price' => 'RM 5.50'],
            ['id' => 18, 'name' => 'Spices', 'price' => 'RM 3.90'],
            ['id' => 19, 'name' => 'Sauce', 'price' => 'RM 5.00'],
            ['id' => 20, 'name' => 'Nugget', 'price' => 'RM 12.00'],
        ];

        foreach ($products as $product) {
            Product::firstOrCreate($product);
        }

    }
}
