<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'tmatsuoka@gmail.com',
            // bcryptでハッシュ化
            'password' => bcrypt('tmastuoka'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
     }
}
