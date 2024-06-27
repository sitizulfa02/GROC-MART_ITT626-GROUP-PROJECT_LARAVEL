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
            ['id' => 1, 'product_type' => 'Water', 'description' => 'Drinks and refreshments including water, soda, and juices.', 'price' => 'RM 1.50', 'quantity' => '100', 'category' => 'Beverages'],
            ['id' => 2, 'product_type' => 'Soda', 'description' => 'Drinks and refreshments including water, soda, and juices.', 'price' => 'RM 2.00', 'quantity' => '65', 'category' => 'Beverages'],
            ['id' => 3, 'product_type' => 'Juice', 'description' => 'Drinks and refreshments including water, soda, and juices.', 'price' => 'RM 2.50', 'quantity' => '70', 'category' => 'Beverages'],
            ['id' => 4, 'product_type' => 'Milk', 'description' => 'Drinks and refreshments including water, soda, and juices', 'price' => 'RM 5.00', 'quantity' => '50', 'category' => 'Beverages'],
            ['id' => 5, 'product_type' => 'Coffee', 'description' => 'Drinks and refreshments including water, soda, and juices', 'price' => 'RM 4.00', 'quantity' => '34', 'category' => 'Beverages'],
            ['id' => 6, 'product_type' => 'Rice', 'description' => 'Daily Food', 'price' => 'RM 30.00', 'quantity' => '50', 'category' => 'Food'],
            ['id' => 7, 'product_type' => 'Chicken (500g)', 'description' => 'Daily Food', 'price' => 'RM 15.00', 'quantity' => '20', 'category' => 'Food'],
            ['id' => 8, 'product_type' => 'Potato (Pack)', 'description' => 'Daily Food', 'price' => 'RM 10.00', 'quantity' => '30', 'category' => 'Food'],
            ['id' => 9, 'product_type' => 'Carrot (Pack)', 'description' => 'Daily Food', 'price' => 'RM 6.00', 'quantity' => '25', 'category' => 'Food'],
            ['id' => 10, 'product_type' => 'Meat (300g)', 'description' => 'Daily Food', 'price' => 'RM 20.00', 'quantity' => '22', 'category' => 'Food'],
            ['id' => 11, 'product_type' => 'Body Wash', 'description' => 'Products for personal hygiene and beauty care', 'price' => 'RM 9.00', 'quantity' => '120', 'category' => 'Beauty and Personal Care'],
            ['id' => 12, 'product_type' => 'Shampoo', 'description' => 'Products for personal hygiene and beauty care', 'price' => 'RM 8.00', 'quantity' => '70', 'category' => 'Beauty and Personal Care'],
            ['id' => 13, 'product_type' => 'Deodorant', 'description' => 'Products for personal hygiene and beauty care', 'price' => 'RM 4.90', 'quantity' => '67', 'category' => 'Beauty and Personal Care'],
            ['id' => 14, 'product_type' => 'Perfume', 'description' => 'Products for personal hygiene and beauty care', 'price' => 'RM 11.00', 'quantity' => '49', 'category' => 'Beauty and Personal Care'],
            ['id' => 15, 'product_type' => 'Face powder', 'description' => 'Products for personal hygiene and beauty care', 'price' => 'RM 6.00', 'quantity' => '44', 'category' => 'Beauty and Personal Care'],
            ['id' => 16, 'product_type' => 'Snack', 'description' => 'Miscellaneous items not categorized elsewhere', 'price' => 'RM 3.00', 'quantity' => '200', 'category' => 'Other'],
            ['id' => 17, 'product_type' => 'Biscuit', 'description' => 'Miscellaneous items not categorized elsewhere', 'price' => 'RM 5.50', 'quantity' => '76', 'category' => 'Other'],
            ['id' => 18, 'product_type' => 'Spices', 'description' => 'Miscellaneous items not categorized elsewhere', 'price' => 'RM 3.90', 'quantity' => '32', 'category' => 'Other'],
            ['id' => 19, 'product_type' => 'Sauce', 'description' => 'Miscellaneous items not categorized elsewhere', 'price' => 'RM 5.00', 'quantity' => '87', 'category' => 'Other'],
            ['id' => 20, 'product_type' => 'Nugget', 'description' => 'Miscellaneous items not categorized elsewhere', 'price' => 'RM 12.00', 'quantity' => '24', 'category' => 'Other'],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(['id' => $product['id']], $product);
        }
    }
}
