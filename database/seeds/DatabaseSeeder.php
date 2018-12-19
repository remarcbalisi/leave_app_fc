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
        $this->call(GenderTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(UserRoleTableSeeder::class);
        $this->call(ContactTypeTableSeeder::class);
        $this->call(AddressTypeTableSeeder::class);
    }
}
