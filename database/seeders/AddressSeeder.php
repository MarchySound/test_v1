<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('addresses')->insert([
            [
                'user_id' => 1,
                'address_type' => 3,
                'address_is_default' => 1,
                'address_first_name' => 'John',
                'address_last_name' => 'Doe',
                'address_email' => 'johndoe@mail.com',
                'address_contact' => '123-4567',
                'address_line1' => 'Some random building number, at a random street',
                'address_line2' => null,
                'address_city' => 'Bikini Bottom',
                'address_state' => 'Pacific Ocean',
                'address_zip_code' => null,
                'address_country' => 'Unknown',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'address_type' => 3,
                'address_is_default' => 1,
                'address_first_name' => 'Jane',
                'address_last_name' => 'Doe',
                'address_email' => 'janedoe@mail.com',
                'address_contact' => '123-4567',
                'address_line1' => 'Under a rock',
                'address_line2' => null,
                'address_city' => 'Bikini Bottom',
                'address_state' => 'Pacific Ocean',
                'address_zip_code' => null,
                'address_country' => 'Unknown',
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}
