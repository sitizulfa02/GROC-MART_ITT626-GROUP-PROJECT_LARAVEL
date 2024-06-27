<?php

use Illuminate\Database\Seeder;

class QuantitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $quantities = [
            ['quantity' => 1],
            ['quantity' => 2],
            ['quantity' => 3],
            ['quantity' => 4],
            ['quantity' => 5],
            ['quantity' => 6],
            ['quantity' => 7],
            ['quantity' => 8],
            ['quantity' => 9],
            ['quantity' => 10],
            // Add more entries as needed
        ];

        DB::table('quantities')->insert($quantities);
    }
}
