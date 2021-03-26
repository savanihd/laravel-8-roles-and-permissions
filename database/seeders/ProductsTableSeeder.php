<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Paket Tour Murah',
                'detail' => 'Sesuai harga',
                'created_at' => '2021-03-26 06:48:03',
                'updated_at' => '2021-03-26 06:48:03',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Paket Tour Biasa aja',
                'detail' => 'Mantap',
                'created_at' => '2021-03-26 06:48:15',
                'updated_at' => '2021-03-26 06:48:15',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Paket Tour Sesuai Ekspektasi',
                'detail' => 'Yah',
                'created_at' => '2021-03-26 06:48:32',
                'updated_at' => '2021-03-26 06:48:32',
            ),
        ));
        
        
    }
}