<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Hardik Savani',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$v53EOajMDIjGfJrYAUtZSut6am4OGs1Db1mRm5OFws5iIly.aC8NO',
                'remember_token' => NULL,
                'created_at' => '2021-03-26 06:15:46',
                'updated_at' => '2021-03-26 06:15:46',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'Muhammad Lutfhi Azzammi',
                'email' => 'luthfia911@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NbHPldDqctSn3hURw4.JM.x9l.enmSdbm3A54QpfFktfwWr8BkuRq',
                'remember_token' => NULL,
                'created_at' => '2021-03-26 06:23:12',
                'updated_at' => '2021-03-26 06:23:12',
            ),
            2 => 
            array (
                'id' => 5,
                'name' => 'Amir Bowman',
                'email' => 'luthfi_azzammi@hotmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$jImeTJYZXZpo4oaT1FM16.fr0Oy66of6o29s7YK9JIXGDsx/djwzO',
                'remember_token' => NULL,
                'created_at' => '2021-03-26 06:49:28',
                'updated_at' => '2021-03-26 06:49:28',
            ),
        ));
        
        
    }
}