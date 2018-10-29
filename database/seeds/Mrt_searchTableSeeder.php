<?php

use Illuminate\Database\Seeder;

class Mrt_searchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mrt_search')->insert([

        	'mrt_search'=>'pf-phaholyothin',
            
        ]);
        DB::table('mrt_search')->insert([

        	'mrt_search'=>'pf-sukhumvit',
            
        ]);
        DB::table('mrt_search')->insert([

        	'mrt_search'=>'pf-silom',
            
        ]);
    }
}
