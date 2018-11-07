<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $current_timestamp = date('Y-m-d h:i:s');

        DB::table('contacts')->insert([
            [
                'name' => 'Bento Keyboard',
                'email' => 'bento@keyboard.cat',
                'phone' => '40028922',
                'cep' => '89790-000',
                'created_at' => $current_timestamp,
				'updated_at' => $current_timestamp,
            ],
            [
                'name' => 'Baguncinha California',
                'email' => 'baguncinha@swat.com',
                'phone' => '190',
                'cep' => '89790-000',
                'created_at' => $current_timestamp,
				'updated_at' => $current_timestamp,
            ]
        ]);
    }
}
