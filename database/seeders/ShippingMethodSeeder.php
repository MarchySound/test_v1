<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShippingMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shipping_methods')->insert([
            [
                'shipping_title' => 'OPTION 1',
                'shipping_rate' => 10,
                'shipping_days' => 3,
                'shipping_stripe_id' => 'STRIPE_SHIPPING_ID',
                'shipping_display_order' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'shipping_title' => 'OPTION 2',
                'shipping_rate' => 13,
                'shipping_days' => 1,
                'shipping_stripe_id' => 'STRIPE_SHIPPING_ID',
                'shipping_display_order' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
        ]);

        DB::table('shipping_rules')->insert([
            [
                'group_id' => 1,
                'shipping_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
            [
                'group_id' => 1,
                'shipping_id' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ],
        ]);
    }
}
