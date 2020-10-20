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
        // $this->call(UserSeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(FloorSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
