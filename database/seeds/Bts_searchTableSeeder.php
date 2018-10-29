<?php

use Illuminate\Database\Seeder;

class Bts_searchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bts_search')->insert([

        	'bts_search'=>'pf-asoke',
            
        ]);
        DB::table('bts_search')->insert([

        	'bts_search'=>'pf-chidlom',
            
        ]);
        DB::table('bts_search')->insert([

        	'bts_search'=>'pf-phrom',
            
        ]);
        DB::table('bts_search')->insert([

        	'bts_search'=>'pf-phoenimit',
            
        ]);
        DB::table('bts_search')->insert([

        	'bts_search'=>'pf-siam',
            
        ]);
        DB::table('bts_search')->insert([

        	'bts_search'=>'pf-saladaeng',
            
        ]);
        DB::table('bts_search')->insert([

        	'bts_search'=>'pf-victory',
            
        ]);
    }
}
