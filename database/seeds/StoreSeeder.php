<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
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

        DB::table('stores')->delete();

        DB::table('stores')->insert(array(
            0 => array(
                'store_name' => '成城石井 東急東横店',
                'store_appearance' => 'store1.jpg',
                'dividedBy' => '40'
            ),
            1 => array(
                'store_name' => '成城石井 富ヶ谷店',
                'store_appearance' => 'store2.jpg',
                'dividedBy' => '40'
            ),
            2 => array(
                'store_name' => '成城石井 西麻布店',
                'store_appearance' => 'store3.jpg',
                'dividedBy' => '40'
            ),
            3 => array(
                'store_name' => 'オオゼキ池尻店',
                'store_appearance' => 'store4.jpg',
                'dividedBy' => '40'
            ),
            4 => array(
                'store_name' => 'まいばすけっと 渋谷店',
                'store_appearance' => 'store5.jpg',
                'dividedBy' => '40'
            ),
            5 => array(
                'store_name' => '東急ストア 中目黒本店',
                'store_appearance' => 'store6.jpg',
                'dividedBy' => '40'
            ),
            6 => array(
                'store_name' => 'OKストア 三軒茶屋店',
                'store_appearance' => 'store7.jpg',
                'dividedBy' => '40'
            ),
            7 => array(
                'store_name' => '西友 三軒茶屋店',
                'store_appearance' => 'store8.jpg',
                'dividedBy' => '40'
            ),
            8 => array(
                'store_name' => 'ピーコック ストア代官山店',
                'store_appearance' => 'store9.jpg',
                'dividedBy' => '40'
            ),
        ));
    }
}