<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Inventory;
use Illuminate\Database\Seeder;

class CreateInventoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventory::create([
            'name' => 'HP Laptop',
            'type' => 'Computer',
            'description' => 'Company Laptop for her employees',
            'price' => 10000.00,
            'status' => 0
        ]);

        Inventory::create([
            'name' => 'Panasonic Refrigerator',
            'type' => 'Electronic',
            'description' => 'Cool your drinks with this',
            'price' => 15000.00,
            'status' => 1
        ]);

        Inventory::create([
            'name' => 'iPhone 14',
            'type' => 'Mobile Vevice',
            'description' => 'Make calls to family & friends',
            'price' => 9000.00,
            'status' => 1
        ]);
    }
}
