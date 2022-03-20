<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Either
        $products=[
            ['name'=>'T-Shirt','category'=>'Clothing','status'=>'1'],
            ['name'=>'Goldstar Shoes','category'=>'Shoes','status'=>'1'],
            ['name'=>'Samsung Galaxy S10','category'=>'Electronics','status'=>'1'],
            ['name'=>'WaterProof Travel Bag','category'=>'Bags','status'=>'1'],
        ];
        foreach ($products as $product) {
        Product::create($product);
        }

        //Or
        Product::factory()->count(10)->create();
    }
}
