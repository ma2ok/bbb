<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('types')->delete();

        DB::table('types')->insert(array(
            0 => array(
                'type_name' => '肉',
                'floor' => 1,
                'position' => 0,
                'store_id' => 1,
            ),
            1 => array(
                'type_name' => '海鮮',
                'floor' => 1,
                'position' => 3,
                'store_id' => 1,
            ),
            2 => array(
                'type_name' => '野菜',
                'floor' => 1,
                'position' => 8,
                'store_id' => 1,
            ),
            3 => array(
                'type_name' => '菓子',
                'floor' => 1,
                'position' => 8,
                'store_id' => 1,
            ),
            4 => array(
                'type_name' => '飲料',
                'floor' => 1,
                'position' => 8,
                'store_id' => 1,
            ),
            5 => array(
                'type_name' => '酒',
                'floor' => 1,
                'position' => 8,
                'store_id' => 1,
            ),
            6 => array(
                'type_name' => '穀物',
                'floor' => 1,
                'position' => 8,
                'store_id' => 1,
            ),
            7 => array(
                'type_name' => '肉',
                'floor' => 1,
                'position' => 0,
                'store_id' => 2,
            ),
            8 => array(
                'type_name' => '海鮮',
                'floor' => 1,
                'position' => 3,
                'store_id' => 2,
            ),
            9 => array(
                'type_name' => '野菜',
                'floor' => 1,
                'position' => 8,
                'store_id' => 2,
            ),
            10 => array(
                'type_name' => '菓子',
                'floor' => 1,
                'position' => 8,
                'store_id' => 2,
            ),
            11 => array(
                'type_name' => '飲料',
                'floor' => 1,
                'position' => 8,
                'store_id' => 2,
            ),
            12 => array(
                'type_name' => '酒',
                'floor' => 1,
                'position' => 8,
                'store_id' => 2,
            ),
            13 => array(
                'type_name' => '穀物',
                'floor' => 1,
                'position' => 8,
                'store_id' => 2,
            ),
            14 => array(
                'type_name' => '肉',
                'floor' => 1,
                'position' => 0,
                'store_id' => 3,
            ),
            15 => array(
                'type_name' => '海鮮',
                'floor' => 1,
                'position' => 3,
                'store_id' => 3,
            ),
            16 => array(
                'type_name' => '野菜',
                'floor' => 1,
                'position' => 8,
                'store_id' => 3,
            ),
            17 => array(
                'type_name' => '菓子',
                'floor' => 1,
                'position' => 8,
                'store_id' => 3,
            ),
            18 => array(
                'type_name' => '飲料',
                'floor' => 1,
                'position' => 8,
                'store_id' => 3,
            ),
            19 => array(
                'type_name' => '酒',
                'floor' => 1,
                'position' => 8,
                'store_id' => 3,
            ),
            20 => array(
                'type_name' => '穀物',
                'floor' => 1,
                'position' => 8,
                'store_id' => 3,
            ),
            21 => array(
                'type_name' => '肉',
                'floor' => 1,
                'position' => 0,
                'store_id' => 4,
            ),
            22 => array(
                'type_name' => '海鮮',
                'floor' => 1,
                'position' => 3,
                'store_id' => 4,
            ),
            23 => array(
                'type_name' => '野菜',
                'floor' => 1,
                'position' => 8,
                'store_id' => 4,
            ),
            24 => array(
                'type_name' => '菓子',
                'floor' => 1,
                'position' => 8,
                'store_id' => 4,
            ),
            25 => array(
                'type_name' => '飲料',
                'floor' => 1,
                'position' => 8,
                'store_id' => 4,
            ),
            26 => array(
                'type_name' => '酒',
                'floor' => 1,
                'position' => 8,
                'store_id' => 4,
            ),
            27 => array(
                'type_name' => '穀物',
                'floor' => 1,
                'position' => 8,
                'store_id' => 4,
            ),
            28 => array(
                'type_name' => '肉',
                'floor' => 1,
                'position' => 0,
                'store_id' => 5,
            ),
            29 => array(
                'type_name' => '海鮮',
                'floor' => 1,
                'position' => 3,
                'store_id' => 5,
            ),
            30 => array(
                'type_name' => '野菜',
                'floor' => 1,
                'position' => 8,
                'store_id' => 5,
            ),
            31 => array(
                'type_name' => '菓子',
                'floor' => 1,
                'position' => 8,
                'store_id' => 5,
            ),
            32 => array(
                'type_name' => '飲料',
                'floor' => 1,
                'position' => 8,
                'store_id' => 5,
            ),
            33 => array(
                'type_name' => '酒',
                'floor' => 1,
                'position' => 8,
                'store_id' => 5,
            ),
            34 => array(
                'type_name' => '穀物',
                'floor' => 1,
                'position' => 8,
                'store_id' => 5,
            ),
            35 => array(
                'type_name' => '肉',
                'floor' => 1,
                'position' => 0,
                'store_id' => 6,
            ),
            36 => array(
                'type_name' => '海鮮',
                'floor' => 1,
                'position' => 3,
                'store_id' => 6,
            ),
            37 => array(
                'type_name' => '野菜',
                'floor' => 1,
                'position' => 8,
                'store_id' => 6,
            ),
            38 => array(
                'type_name' => '菓子',
                'floor' => 1,
                'position' => 8,
                'store_id' => 6,
            ),
            39 => array(
                'type_name' => '飲料',
                'floor' => 1,
                'position' => 8,
                'store_id' => 6,
            ),
            40 => array(
                'type_name' => '酒',
                'floor' => 1,
                'position' => 8,
                'store_id' => 6,
            ),
            41 => array(
                'type_name' => '穀物',
                'floor' => 1,
                'position' => 8,
                'store_id' => 6,
            ),
            42 => array(
                'type_name' => '肉',
                'floor' => 1,
                'position' => 0,
                'store_id' => 7,
            ),
            43 => array(
                'type_name' => '海鮮',
                'floor' => 1,
                'position' => 3,
                'store_id' => 7,
            ),
            44 => array(
                'type_name' => '野菜',
                'floor' => 1,
                'position' => 8,
                'store_id' => 7,
            ),
            45 => array(
                'type_name' => '菓子',
                'floor' => 1,
                'position' => 8,
                'store_id' => 7,
            ),
            46 => array(
                'type_name' => '飲料',
                'floor' => 1,
                'position' => 8,
                'store_id' => 7,
            ),
            47 => array(
                'type_name' => '酒',
                'floor' => 1,
                'position' => 8,
                'store_id' => 7,
            ),
            48 => array(
                'type_name' => '穀物',
                'floor' => 1,
                'position' => 8,
                'store_id' => 7,
            ),
            49 => array(
                'type_name' => '肉',
                'floor' => 1,
                'position' => 0,
                'store_id' => 8,
            ),
            50 => array(
                'type_name' => '海鮮',
                'floor' => 1,
                'position' => 3,
                'store_id' => 8,
            ),
            51 => array(
                'type_name' => '野菜',
                'floor' => 1,
                'position' => 8,
                'store_id' => 8,
            ),
            52 => array(
                'type_name' => '菓子',
                'floor' => 1,
                'position' => 8,
                'store_id' => 8,
            ),
            53 => array(
                'type_name' => '飲料',
                'floor' => 1,
                'position' => 8,
                'store_id' => 8,
            ),
            54 => array(
                'type_name' => '酒',
                'floor' => 1,
                'position' => 8,
                'store_id' => 8,
            ),
            55 => array(
                'type_name' => '穀物',
                'floor' => 1,
                'position' => 8,
                'store_id' => 8,
            ),
            56 => array(
                'type_name' => '肉',
                'floor' => 1,
                'position' => 0,
                'store_id' => 9,
            ),
            57 => array(
                'type_name' => '海鮮',
                'floor' => 1,
                'position' => 3,
                'store_id' => 9,
            ),
            58 => array(
                'type_name' => '野菜',
                'floor' => 1,
                'position' => 8,
                'store_id' => 9,
            ),
            59 => array(
                'type_name' => '菓子',
                'floor' => 1,
                'position' => 8,
                'store_id' => 9,
            ),
            60 => array(
                'type_name' => '飲料',
                'floor' => 1,
                'position' => 8,
                'store_id' => 9,
            ),
            61 => array(
                'type_name' => '酒',
                'floor' => 1,
                'position' => 8,
                'store_id' => 9,
            ),
            62 => array(
                'type_name' => '穀物',
                'floor' => 1,
                'position' => 8,
                'store_id' => 9,
            ),
        ));
    }
}
