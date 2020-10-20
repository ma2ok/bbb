<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('locations')->delete();

        DB::table('locations')->insert(array(
            0 => array(
                'address' => '東京都渋谷区渋谷２丁目２４−１ 東急百貨店 東横店西館',
                'location' => (DB::raw("ST_GeomFromText('POINT(35.6734337 139.6792082)')")),
                'store_id' => '1'
            ),
            1 => array(
                'address' => '東京都渋谷区富ケ谷１丁目９−１６',
                'location' => (DB::raw("ST_GeomFromText('POINT(35.6696433 139.6862136)')")),
                'store_id' => '2'
            ),
            2 => array(
                'address' => '東京都港区西麻布４丁目１５−２',
                'location' => (DB::raw("ST_GeomFromText('POINT(35.6496253 139.7065457)')")),
                'store_id' => '3'
            ),
            3 => array(
                'address' => '東京都世田谷区池尻３丁目２７−２４',
                'location' => (DB::raw("ST_GeomFromText('POINT(35.6490496 139.6796946)')")),
                'store_id' => '4'
            ),
            4 => array(
                'address' => '東京都世田谷区太子堂４丁目２４−８',
                'location' => (DB::raw("ST_GeomFromText('POINT(35.6441043 139.6689479)')")),
                'store_id' => '5'
            ),
            5 => array(
                'address' => '東京都目黒区上目黒１丁目２１−１２',
                'location' => (DB::raw("ST_GeomFromText('POINT(35.6439206 139.6913201)')")),
                'store_id' => '6'
            ),
            6 => array(
                'address' => '東京都世田谷区池尻３丁目２７−１１',
                'location' => (DB::raw("ST_GeomFromText('POINT(35.6496252 139.6780755)')")),
                'store_id' => '7'
            ),
            7 => array(
                'address' => '東京都世田谷区太子堂４丁目２４−８',
                'location' => (DB::raw("ST_GeomFromText('POINT(35.6445839 139.6702487)')")),
                'store_id' => '8'
            ),
            8 => array(
                'address' => '東京都渋谷区代官山町１７−６ アドレス・ディセ',
                'location' => (DB::raw("ST_GeomFromText('POINT(35.6489313 139.7033805)')")),
                'store_id' => '9'
            ),
        ));
    }
}
