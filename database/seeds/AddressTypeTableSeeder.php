<?php

use Illuminate\Database\Seeder;

class AddressTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('address_type')->insert([
            'name' => 'Current',
        ]);

        DB::table('address_type')->insert([
            'name' => 'Permanent',
        ]);
    }
}
