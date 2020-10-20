<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->delete();

        DB::table('products')->insert(array(
            0 => array(
                'product_name' => '牛肉',
                'type_id' => 1,
            ),
            1 => array(
                'product_name' => '豚肉',
                'type_id' => 1,
            ),
            2 => array(
                'product_name' => '鳥肉',
                'type_id' => 1,
            ),
            3 => array(
                'product_name' => 'えび',
                'type_id' => 2,
            ),
            4 => array(
                'product_name' => 'タコ',
                'type_id' => 2,
            ),
            5 => array(
                'product_name' => 'カニ',
                'type_id' => 2,
            ),
            6 => array(
                'product_name' => 'サンマ',
                'type_id' => 2,
            ),
            7 => array(
                'product_name' => 'マグロ',
                'type_id' => 2,
            ),
            8 => array(
                'product_name' => '白菜',
                'type_id' => 3,
            ),
            9 => array(
                'product_name' => 'キャベツ',
                'type_id' => 3,
            ),
            10 => array(
                'product_name' => '大根',
                'type_id' => 3,
            ),
            11 => array(
                'product_name' => '人参',
                'type_id' => 3,
            ),
            12 => array(
                'product_name' => 'ブロッコリー',
                'type_id' => 3,
            ),
            13 => array(
                'product_name' => 'カリフラワー',
                'type_id' => 3,
            ),
            14 => array(
                'product_name' => 'チョコレート',
                'type_id' => 4,
            ),
            15 => array(
                'product_name' => 'ラムネ',
                'type_id' => 4,
            ),
            16 => array(
                'product_name' => 'ガム',
                'type_id' => 4,
            ),
            17 => array(
                'product_name' => 'フリスク',
                'type_id' => 4,
            ),
            18 => array(
                'product_name' => '飴',
                'type_id' => 4,
            ),
            19 => array(
                'product_name' => 'ポテトチップス',
                'type_id' => 4,
            ),
            20 => array(
                'product_name' => 'お茶',
                'type_id' => 5,
            ),
            21 => array(
                'product_name' => 'カルピス',
                'type_id' => 5,
            ),
            22 => array(
                'product_name' => 'コーラ',
                'type_id' => 5,
            ),
            23 => array(
                'product_name' => 'コーヒー',
                'type_id' => 5,
            ),
            24 => array(
                'product_name' => 'ソーダ',
                'type_id' => 5,
            ),
            25 => array(
                'product_name' => 'ビール',
                'type_id' => 6,
            ),
            26 => array(
                'product_name' => '日本酒',
                'type_id' => 6,
            ),
            27 => array(
                'product_name' => 'いいちこ',
                'type_id' => 6,
            ),
            28 => array(
                'product_name' => 'チューハイ',
                'type_id' => 6,
            ),
            29 => array(
                'product_name' => '米',
                'type_id' => 7,
            ),
            30 => array(
                'product_name' => 'パン',
                'type_id' => 7,
            ),
            31 => array(
                'product_name' => 'シリアル',
                'type_id' => 7,
            ),
            32 => array(
                'product_name' => 'オートミール',
                'type_id' => 7,
            ),
            33 => array(
                'product_name' => '牛肉',
                'type_id' => 8,
            ),
            34 => array(
                'product_name' => '豚肉',
                'type_id' => 8,
            ),
            35 => array(
                'product_name' => '鳥肉',
                'type_id' => 8,
            ),
            36 => array(
                'product_name' => 'えび',
                'type_id' => 9,
            ),
            37 => array(
                'product_name' => 'タコ',
                'type_id' => 9,
            ),
            38 => array(
                'product_name' => 'カニ',
                'type_id' => 9,
            ),
            39 => array(
                'product_name' => 'サンマ',
                'type_id' => 9,
            ),
            40 => array(
                'product_name' => '白菜',
                'type_id' => 10,
            ),
            41 => array(
                'product_name' => 'キャベツ',
                'type_id' => 10,
            ),
            42 => array(
                'product_name' => '大根',
                'type_id' => 10,
            ),
            43 => array(
                'product_name' => '人参',
                'type_id' => 10,
            ),
            44 => array(
                'product_name' => 'ブロッコリー',
                'type_id' => 10,
            ),
            45 => array(
                'product_name' => 'カリフラワー',
                'type_id' => 10,
            ),
            46 => array(
                'product_name' => 'マグロ',
                'type_id' => 9,
            ),
            47 => array(
                'product_name' => 'チョコレート',
                'type_id' => 11,
            ),
            48 => array(
                'product_name' => 'ラムネ',
                'type_id' => 11,
            ),
            49 => array(
                'product_name' => 'ガム',
                'type_id' => 11,
            ),
            50 => array(
                'product_name' => 'フリスク',
                'type_id' => 11,
            ),
            51 => array(
                'product_name' => '飴',
                'type_id' => 11,
            ),
            52 => array(
                'product_name' => 'ポテトチップス',
                'type_id' => 11,
            ),
            53 => array(
                'product_name' => 'お茶',
                'type_id' => 12,
            ),
            54 => array(
                'product_name' => 'カルピス',
                'type_id' => 12,
            ),
            55 => array(
                'product_name' => 'コーラ',
                'type_id' => 12,
            ),
            56 => array(
                'product_name' => 'コーヒー',
                'type_id' => 12,
            ),
            57 => array(
                'product_name' => 'ソーダ',
                'type_id' => 12,
            ),
            58 => array(
                'product_name' => 'ビール',
                'type_id' => 13,
            ),
            59 => array(
                'product_name' => '日本酒',
                'type_id' => 13,
            ),
            60 => array(
                'product_name' => 'いいちこ',
                'type_id' => 13,
            ),
            61 => array(
                'product_name' => 'チューハイ',
                'type_id' => 13,
            ),
            62 => array(
                'product_name' => '米',
                'type_id' => 14,
            ),
            63 => array(
                'product_name' => 'パン',
                'type_id' => 14,
            ),
            64 => array(
                'product_name' => 'シリアル',
                'type_id' => 14,
            ),
            65 => array(
                'product_name' => 'オートミール',
                'type_id' => 14,
            ),
            66 => array(
                'product_name' => '牛肉',
                'type_id' => 15,
            ),
            67 => array(
                'product_name' => '豚肉',
                'type_id' => 15,
            ),
            68 => array(
                'product_name' => '鳥肉',
                'type_id' => 15,
            ),
            69 => array(
                'product_name' => 'えび',
                'type_id' => 16,
            ),
            70 => array(
                'product_name' => 'タコ',
                'type_id' => 16,
            ),
            71 => array(
                'product_name' => 'カニ',
                'type_id' => 16,
            ),
            72 => array(
                'product_name' => 'サンマ',
                'type_id' => 16,
            ),
            73 => array(
                'product_name' => '白菜',
                'type_id' => 17,
            ),
            74 => array(
                'product_name' => 'キャベツ',
                'type_id' => 17,
            ),
            75 => array(
                'product_name' => '大根',
                'type_id' => 17,
            ),
            76 => array(
                'product_name' => '人参',
                'type_id' => 17,
            ),
            77 => array(
                'product_name' => 'ブロッコリー',
                'type_id' => 17,
            ),
            78 => array(
                'product_name' => 'カリフラワー',
                'type_id' => 17,
            ),
            79 => array(
                'product_name' => 'マグロ',
                'type_id' => 16,
            ),
            80 => array(
                'product_name' => 'チョコレート',
                'type_id' => 18,
            ),
            81 => array(
                'product_name' => 'ラムネ',
                'type_id' => 18,
            ),
            82 => array(
                'product_name' => 'ガム',
                'type_id' => 18,
            ),
            83 => array(
                'product_name' => 'フリスク',
                'type_id' => 18,
            ),
            84 => array(
                'product_name' => '飴',
                'type_id' => 18,
            ),
            85 => array(
                'product_name' => 'ポテトチップス',
                'type_id' => 18,
            ),
            86 => array(
                'product_name' => 'お茶',
                'type_id' => 19,
            ),
            87 => array(
                'product_name' => 'カルピス',
                'type_id' => 19,
            ),
            88 => array(
                'product_name' => 'コーラ',
                'type_id' => 19,
            ),
            89 => array(
                'product_name' => 'コーヒー',
                'type_id' => 19,
            ),
            90 => array(
                'product_name' => 'ソーダ',
                'type_id' => 19,
            ),
            91 => array(
                'product_name' => 'ビール',
                'type_id' => 20,
            ),
            92 => array(
                'product_name' => '日本酒',
                'type_id' => 20,
            ),
            93 => array(
                'product_name' => 'いいちこ',
                'type_id' => 20,
            ),
            94 => array(
                'product_name' => 'チューハイ',
                'type_id' => 20,
            ),
            95 => array(
                'product_name' => '米',
                'type_id' => 21,
            ),
            96 => array(
                'product_name' => 'パン',
                'type_id' => 21,
            ),
            97 => array(
                'product_name' => 'シリアル',
                'type_id' => 21,
            ),
            90 => array(
                'product_name' => 'オートミール',
                'type_id' => 21,
            ),
            99 => array(
                'product_name' => '牛肉',
                'type_id' => 22,
            ),
            100 => array(
                'product_name' => '豚肉',
                'type_id' => 22,
            ),
            101 => array(
                'product_name' => '鳥肉',
                'type_id' => 22,
            ),
            102 => array(
                'product_name' => 'えび',
                'type_id' => 23,
            ),
            103 => array(
                'product_name' => 'タコ',
                'type_id' => 23,
            ),
            104 => array(
                'product_name' => 'カニ',
                'type_id' => 23,
            ),
            105 => array(
                'product_name' => 'サンマ',
                'type_id' => 23,
            ),
            106 => array(
                'product_name' => '白菜',
                'type_id' => 24,
            ),
            107 => array(
                'product_name' => 'キャベツ',
                'type_id' => 24,
            ),
            108 => array(
                'product_name' => '大根',
                'type_id' => 24,
            ),
            109 => array(
                'product_name' => '人参',
                'type_id' => 24,
            ),
            110 => array(
                'product_name' => 'ブロッコリー',
                'type_id' => 24,
            ),
            111 => array(
                'product_name' => 'カリフラワー',
                'type_id' => 24,
            ),
            112 => array(
                'product_name' => 'マグロ',
                'type_id' => 23,
            ),
            113 => array(
                'product_name' => 'チョコレート',
                'type_id' => 25,
            ),
            114 => array(
                'product_name' => 'ラムネ',
                'type_id' => 25,
            ),
            115 => array(
                'product_name' => 'ガム',
                'type_id' => 25,
            ),
            116 => array(
                'product_name' => 'フリスク',
                'type_id' => 25,
            ),
            117 => array(
                'product_name' => '飴',
                'type_id' => 25,
            ),
            118 => array(
                'product_name' => 'ポテトチップス',
                'type_id' => 25,
            ),
            119 => array(
                'product_name' => 'お茶',
                'type_id' => 26,
            ),
            120 => array(
                'product_name' => 'カルピス',
                'type_id' => 26,
            ),
            121 => array(
                'product_name' => 'コーラ',
                'type_id' => 26,
            ),
            122 => array(
                'product_name' => 'コーヒー',
                'type_id' => 26,
            ),
            123 => array(
                'product_name' => 'ソーダ',
                'type_id' => 26,
            ),
            124 => array(
                'product_name' => 'ビール',
                'type_id' => 27,
            ),
            125 => array(
                'product_name' => '日本酒',
                'type_id' => 27,
            ),
            126 => array(
                'product_name' => 'いいちこ',
                'type_id' => 27,
            ),
            127 => array(
                'product_name' => 'チューハイ',
                'type_id' => 27,
            ),
            128 => array(
                'product_name' => '米',
                'type_id' => 28,
            ),
            129 => array(
                'product_name' => 'パン',
                'type_id' => 28,
            ),
            130 => array(
                'product_name' => 'シリアル',
                'type_id' => 28,
            ),
            131 => array(
                'product_name' => 'オートミール',
                'type_id' => 28,
            ),
            132 => array(
                'product_name' => '牛肉',
                'type_id' => 29,
            ),
            133 => array(
                'product_name' => '豚肉',
                'type_id' => 29,
            ),
            134 => array(
                'product_name' => '鳥肉',
                'type_id' => 29,
            ),
            135 => array(
                'product_name' => 'えび',
                'type_id' => 30,
            ),
            136 => array(
                'product_name' => 'タコ',
                'type_id' => 30,
            ),
            137 => array(
                'product_name' => 'カニ',
                'type_id' => 30,
            ),
            138 => array(
                'product_name' => 'サンマ',
                'type_id' => 30,
            ),
            139 => array(
                'product_name' => '白菜',
                'type_id' => 31,
            ),
            140 => array(
                'product_name' => 'キャベツ',
                'type_id' => 31,
            ),
            141 => array(
                'product_name' => '大根',
                'type_id' => 31,
            ),
            142 => array(
                'product_name' => '人参',
                'type_id' => 31,
            ),
            143 => array(
                'product_name' => 'ブロッコリー',
                'type_id' => 31,
            ),
            144 => array(
                'product_name' => 'カリフラワー',
                'type_id' => 31,
            ),
            145 => array(
                'product_name' => 'マグロ',
                'type_id' => 30,
            ),
            146 => array(
                'product_name' => 'チョコレート',
                'type_id' => 32,
            ),
            147 => array(
                'product_name' => 'ラムネ',
                'type_id' => 32,
            ),
            148 => array(
                'product_name' => 'ガム',
                'type_id' => 32,
            ),
            149 => array(
                'product_name' => 'フリスク',
                'type_id' => 32,
            ),
            150 => array(
                'product_name' => '飴',
                'type_id' => 32,
            ),
            151 => array(
                'product_name' => 'ポテトチップス',
                'type_id' => 32,
            ),
            152 => array(
                'product_name' => 'お茶',
                'type_id' => 33,
            ),
            153 => array(
                'product_name' => 'カルピス',
                'type_id' => 33,
            ),
            154 => array(
                'product_name' => 'コーラ',
                'type_id' => 33,
            ),
            155 => array(
                'product_name' => 'コーヒー',
                'type_id' => 33,
            ),
            156 => array(
                'product_name' => 'ソーダ',
                'type_id' => 33,
            ),
            157 => array(
                'product_name' => 'ビール',
                'type_id' => 34,
            ),
            158 => array(
                'product_name' => '日本酒',
                'type_id' => 34,
            ),
            159 => array(
                'product_name' => 'いいちこ',
                'type_id' => 34,
            ),
            160 => array(
                'product_name' => 'チューハイ',
                'type_id' => 34,
            ),
            161 => array(
                'product_name' => '米',
                'type_id' => 35,
            ),
            162 => array(
                'product_name' => 'パン',
                'type_id' => 35,
            ),
            163 => array(
                'product_name' => 'シリアル',
                'type_id' => 35,
            ),
            164 => array(
                'product_name' => 'オートミール',
                'type_id' => 35,
            ),
            165 => array(
                'product_name' => '牛肉',
                'type_id' => 36,
            ),
            167 => array(
                'product_name' => '豚肉',
                'type_id' => 36,
            ),
            168 => array(
                'product_name' => '鳥肉',
                'type_id' => 36,
            ),
            169 => array(
                'product_name' => 'えび',
                'type_id' => 37,
            ),
            170 => array(
                'product_name' => 'タコ',
                'type_id' => 37,
            ),
            171 => array(
                'product_name' => 'カニ',
                'type_id' => 37,
            ),
            172 => array(
                'product_name' => 'サンマ',
                'type_id' => 37,
            ),
            173 => array(
                'product_name' => '白菜',
                'type_id' => 38,
            ),
            174 => array(
                'product_name' => 'キャベツ',
                'type_id' => 38,
            ),
            175 => array(
                'product_name' => '大根',
                'type_id' => 38,
            ),
            176 => array(
                'product_name' => '人参',
                'type_id' => 38,
            ),
            177 => array(
                'product_name' => 'ブロッコリー',
                'type_id' => 38,
            ),
            178 => array(
                'product_name' => 'カリフラワー',
                'type_id' => 38,
            ),
            179 => array(
                'product_name' => 'マグロ',
                'type_id' => 37,
            ),
            180 => array(
                'product_name' => 'チョコレート',
                'type_id' => 39,
            ),
            181 => array(
                'product_name' => 'ラムネ',
                'type_id' => 39,
            ),
            182 => array(
                'product_name' => 'ガム',
                'type_id' => 39,
            ),
            183 => array(
                'product_name' => 'フリスク',
                'type_id' => 39,
            ),
            184 => array(
                'product_name' => '飴',
                'type_id' => 39,
            ),
            185 => array(
                'product_name' => 'ポテトチップス',
                'type_id' => 39,
            ),
            186 => array(
                'product_name' => 'お茶',
                'type_id' => 40,
            ),
            187 => array(
                'product_name' => 'カルピス',
                'type_id' => 40,
            ),
            188 => array(
                'product_name' => 'コーラ',
                'type_id' => 40,
            ),
            189 => array(
                'product_name' => 'コーヒー',
                'type_id' => 40,
            ),
            190 => array(
                'product_name' => 'ソーダ',
                'type_id' => 40,
            ),
            191 => array(
                'product_name' => 'ビール',
                'type_id' => 41,
            ),
            192 => array(
                'product_name' => '日本酒',
                'type_id' => 41,
            ),
            193 => array(
                'product_name' => 'いいちこ',
                'type_id' => 41,
            ),
            194 => array(
                'product_name' => 'チューハイ',
                'type_id' => 41,
            ),
            195 => array(
                'product_name' => '米',
                'type_id' => 42,
            ),
            196 => array(
                'product_name' => 'パン',
                'type_id' => 42,
            ),
            197 => array(
                'product_name' => 'シリアル',
                'type_id' => 42,
            ),
            198 => array(
                'product_name' => 'オートミール',
                'type_id' => 42,
            ),
            199 => array(
                'product_name' => '牛肉',
                'type_id' => 43,
            ),
            200 => array(
                'product_name' => '豚肉',
                'type_id' => 43,
            ),
            201 => array(
                'product_name' => '鳥肉',
                'type_id' => 43,
            ),
            202 => array(
                'product_name' => 'えび',
                'type_id' => 44,
            ),
            203 => array(
                'product_name' => 'タコ',
                'type_id' => 44,
            ),
            204 => array(
                'product_name' => 'カニ',
                'type_id' => 44,
            ),
            205 => array(
                'product_name' => 'サンマ',
                'type_id' => 44,
            ),
            206 => array(
                'product_name' => '白菜',
                'type_id' => 45,
            ),
            207 => array(
                'product_name' => 'キャベツ',
                'type_id' => 45,
            ),
            208 => array(
                'product_name' => '大根',
                'type_id' => 45,
            ),
            209 => array(
                'product_name' => '人参',
                'type_id' => 45,
            ),
            210 => array(
                'product_name' => 'ブロッコリー',
                'type_id' => 45,
            ),
            211 => array(
                'product_name' => 'カリフラワー',
                'type_id' => 45,
            ),
            212 => array(
                'product_name' => 'マグロ',
                'type_id' => 44,
            ),
            213 => array(
                'product_name' => 'チョコレート',
                'type_id' => 46,
            ),
            214 => array(
                'product_name' => 'ラムネ',
                'type_id' => 46,
            ),
            215 => array(
                'product_name' => 'ガム',
                'type_id' => 46,
            ),
            216 => array(
                'product_name' => 'フリスク',
                'type_id' => 46,
            ),
            217 => array(
                'product_name' => '飴',
                'type_id' => 46,
            ),
            218 => array(
                'product_name' => 'ポテトチップス',
                'type_id' => 46,
            ),
            219 => array(
                'product_name' => 'お茶',
                'type_id' => 47,
            ),
            220 => array(
                'product_name' => 'カルピス',
                'type_id' => 47,
            ),
            221 => array(
                'product_name' => 'コーラ',
                'type_id' => 47,
            ),
            222 => array(
                'product_name' => 'コーヒー',
                'type_id' => 47,
            ),
            223 => array(
                'product_name' => 'ソーダ',
                'type_id' => 47,
            ),
            224 => array(
                'product_name' => 'ビール',
                'type_id' => 48,
            ),
            225 => array(
                'product_name' => '日本酒',
                'type_id' => 48,
            ),
            226 => array(
                'product_name' => 'いいちこ',
                'type_id' => 48,
            ),
            227 => array(
                'product_name' => 'チューハイ',
                'type_id' => 48,
            ),
            228 => array(
                'product_name' => '米',
                'type_id' => 49,
            ),
            229 => array(
                'product_name' => 'パン',
                'type_id' => 49,
            ),
            230 => array(
                'product_name' => 'シリアル',
                'type_id' => 49,
            ),
            231 => array(
                'product_name' => 'オートミール',
                'type_id' => 49,
            ),
            232 => array(
                'product_name' => '牛肉',
                'type_id' => 50,
            ),
            233 => array(
                'product_name' => '豚肉',
                'type_id' => 50,
            ),
            234 => array(
                'product_name' => '鳥肉',
                'type_id' => 50,
            ),
            235 => array(
                'product_name' => 'えび',
                'type_id' => 51,
            ),
            236 => array(
                'product_name' => 'タコ',
                'type_id' => 51,
            ),
            237 => array(
                'product_name' => 'カニ',
                'type_id' => 51,
            ),
            238 => array(
                'product_name' => 'サンマ',
                'type_id' => 51,
            ),
            239 => array(
                'product_name' => '白菜',
                'type_id' => 52,
            ),
            240 => array(
                'product_name' => 'キャベツ',
                'type_id' => 52,
            ),
            241 => array(
                'product_name' => '大根',
                'type_id' => 52,
            ),
            242 => array(
                'product_name' => '人参',
                'type_id' => 52,
            ),
            243 => array(
                'product_name' => 'ブロッコリー',
                'type_id' => 52,
            ),
            244 => array(
                'product_name' => 'カリフラワー',
                'type_id' => 52,
            ),
            245 => array(
                'product_name' => 'マグロ',
                'type_id' => 51,
            ),
            246 => array(
                'product_name' => 'チョコレート',
                'type_id' => 53
            ),
            247 => array(
                'product_name' => 'ラムネ',
                'type_id' => 53
            ),
            248 => array(
                'product_name' => 'ガム',
                'type_id' => 53
            ),
            249 => array(
                'product_name' => 'フリスク',
                'type_id' => 53
            ),
            250 => array(
                'product_name' => '飴',
                'type_id' => 53
            ),
            251 => array(
                'product_name' => 'ポテトチップス',
                'type_id' => 53
            ),
            252 => array(
                'product_name' => 'お茶',
                'type_id' => 54,
            ),
            253 => array(
                'product_name' => 'カルピス',
                'type_id' => 54,
            ),
            254 => array(
                'product_name' => 'コーラ',
                'type_id' => 54,
            ),
            255 => array(
                'product_name' => 'コーヒー',
                'type_id' => 54,
            ),
            256 => array(
                'product_name' => 'ソーダ',
                'type_id' => 54,
            ),
            257 => array(
                'product_name' => 'ビール',
                'type_id' => 55,
            ),
            258 => array(
                'product_name' => '日本酒',
                'type_id' => 55,
            ),
            259 => array(
                'product_name' => 'いいちこ',
                'type_id' => 55,
            ),
            260 => array(
                'product_name' => 'チューハイ',
                'type_id' => 55,
            ),
            261 => array(
                'product_name' => '米',
                'type_id' => 56,
            ),
            262 => array(
                'product_name' => 'パン',
                'type_id' => 56,
            ),
            263 => array(
                'product_name' => 'シリアル',
                'type_id' => 56,
            ),
            264 => array(
                'product_name' => 'オートミール',
                'type_id' => 56,
            ),
            265 => array(
                'product_name' => '牛肉',
                'type_id' => 57,
            ),
            266 => array(
                'product_name' => '豚肉',
                'type_id' => 57,
            ),
            267 => array(
                'product_name' => '鳥肉',
                'type_id' => 57,
            ),
            268 => array(
                'product_name' => 'えび',
                'type_id' => 58,
            ),
            269 => array(
                'product_name' => 'タコ',
                'type_id' => 58,
            ),
            270 => array(
                'product_name' => 'カニ',
                'type_id' => 58,
            ),
            271 => array(
                'product_name' => 'サンマ',
                'type_id' => 58,
            ),
            272 => array(
                'product_name' => '白菜',
                'type_id' => 59,
            ),
            273 => array(
                'product_name' => 'キャベツ',
                'type_id' => 59,
            ),
            274 => array(
                'product_name' => '大根',
                'type_id' => 59,
            ),
            275 => array(
                'product_name' => '人参',
                'type_id' => 59,
            ),
            276 => array(
                'product_name' => 'ブロッコリー',
                'type_id' => 59,
            ),
            278 => array(
                'product_name' => 'カリフラワー',
                'type_id' => 59,
            ),
            279 => array(
                'product_name' => 'マグロ',
                'type_id' => 58,
            ),
            280 => array(
                'product_name' => 'チョコレート',
                'type_id' => 60
            ),
            281 => array(
                'product_name' => 'ラムネ',
                'type_id' => 60
            ),
            282 => array(
                'product_name' => 'ガム',
                'type_id' => 60
            ),
            283 => array(
                'product_name' => 'フリスク',
                'type_id' => 60
            ),
            284 => array(
                'product_name' => '飴',
                'type_id' => 60
            ),
            285 => array(
                'product_name' => 'ポテトチップス',
                'type_id' => 60
            ),
            286 => array(
                'product_name' => 'お茶',
                'type_id' => 61,
            ),
            287 => array(
                'product_name' => 'カルピス',
                'type_id' => 61,
            ),
            288 => array(
                'product_name' => 'コーラ',
                'type_id' => 61,
            ),
            289 => array(
                'product_name' => 'コーヒー',
                'type_id' => 61,
            ),
            290 => array(
                'product_name' => 'ソーダ',
                'type_id' => 61,
            ),
            291 => array(
                'product_name' => 'ビール',
                'type_id' => 62,
            ),
            292 => array(
                'product_name' => '日本酒',
                'type_id' => 62,
            ),
            293 => array(
                'product_name' => 'いいちこ',
                'type_id' => 62,
            ),
            294 => array(
                'product_name' => 'チューハイ',
                'type_id' => 62,
            ),
            295 => array(
                'product_name' => '米',
                'type_id' => 63,
            ),
            296 => array(
                'product_name' => 'パン',
                'type_id' => 63,
            ),
            297 => array(
                'product_name' => 'シリアル',
                'type_id' => 63,
            ),
            298 => array(
                'product_name' => 'オートミール',
                'type_id' => 63,
            ),
        ));
    }
}
