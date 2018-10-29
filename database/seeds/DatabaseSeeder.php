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
<<<<<<< HEAD
         $this->call(DealerrTableSeeder::class);
         $this->call(Mrt_searchTableSeeder::class);
         $this->call(Bts_searchTableSeeder::class);
=======
         $this->call(DealerTableSeeder::class);
>>>>>>> a7fc7d7dc29ef7b6ef3bd0556e3a325e468ad42f
    }
}
