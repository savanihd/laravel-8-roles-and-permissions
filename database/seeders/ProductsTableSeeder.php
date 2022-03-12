<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i=0; $i < 100; $i++){
            Product::create([
                'name' => $faker->name,
                'detail' => $faker->text
            ]);
        }        
    }
}