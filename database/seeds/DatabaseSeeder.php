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
        $this->call([GroupSeeder::class,PermissionSeeder::class,CategorySeeder::class,UserSeeder::class,PostSeeder::class,ProductSeeder::class]);        
    }
}
