<?php

use Illuminate\Database\Seeder;
use App\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $locations = [
            ['id' => 1, 'store_name' => 'Groc Mart (Arau)', 'address' => 'Lot 15, Taman Sri Wang, Arau, Perlis'],
            ['id' => 2, 'store_name' => 'Groc Mart (Kangar)', 'address' => 'Lot 3, Taman Ceria, Kangar Jaya, Perlis'],
            ['id' => 3, 'store_name' => 'Groc Mart (Padang Besar)', 'address' => 'Lot 10, Padang Besar Mart, Padang Besar, Perlis.'],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}