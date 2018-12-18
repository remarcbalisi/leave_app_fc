<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'name' => 'Admin',
        ]);

        DB::table('role')->insert([
            'name' => 'HR Manager',
        ]);

        DB::table('role')->insert([
            'name' => 'Agent',
        ]);
    }
}
