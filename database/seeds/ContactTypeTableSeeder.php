<?php

use Illuminate\Database\Seeder;

class ContactTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_type')->insert([
            'name' => 'Cellphone',
        ]);

        DB::table('contact_type')->insert([
            'name' => 'Telephone',
        ]);

    }
}
