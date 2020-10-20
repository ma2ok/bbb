<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $faker = \Faker\Factory::create();

        DB::table('floors')->delete();

        DB::table('floors')->insert(array(
            0 => array(
                'floor' => '1',
                'floor_map' => 'FloorMap1.jpg',
                'store_id' => '1'
            ),
            1 => array(
                'floor' => '1',
                'floor_map' => 'FloorMap2.jpg',
                'store_id' => '2'
            ),
            2 => array(
                'floor' => '1',
                'floor_map' => 'FloorMap3.jpg',
                'store_id' => '3'
            ),
            3 => array(
                'floor' => '1',
                'floor_map' => 'FloorMap4.jpg',
                'store_id' => '4'
            ),
            4 => array(
                'floor' => '1',
                'floor_map' => 'FloorMap5.jpg',
                'store_id' => '5'
            ),
            5 => array(
                'floor' => '1',
                'floor_map' => 'FloorMap6.jpg',
                'store_id' => '6'
            ),
            6 => array(
                'floor' => '1',
                'floor_map' => 'FloorMap7.jpg',
                'store_id' => '7'
            ),
            7 => array(
                'floor' => '1',
                'floor_map' => 'FloorMap8.jpg',
                'store_id' => '8'
            ),
            8 => array(
                'floor' => '1',
                'floor_map' => 'FloorMap9.jpg',
                'store_id' => '9'
            ),
        ));
        
    }
}
