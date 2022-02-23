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
       
        $this->call(UsersTableSeeder::class);
        $this->call(CatRolesTableSeeder::class);
        $this->call(CatRoleUserTableSeeder::class);
        $this->call(MenuParentSeeder::class);
        $this->call(MenuParentChildrenSeeder::class);
    }
}
