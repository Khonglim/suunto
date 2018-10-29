<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(ProvinceTableSeeder::class);
         $this->call(MrtTableSeeder::class);
         $this->call(BtsTableSeeder::class);
         $this->call(UserTableSeeder::class);

         $this->call(DealerTableSeeder::class);
         $this->call(Mrt_searchTableSeeder::class);
         $this->call(Bts_searchTableSeeder::class);
         $this->call(ShoppingTableSeeder::class);
         $this->call(ShoppingToTableSeeder::class);
         
        
    }
}
