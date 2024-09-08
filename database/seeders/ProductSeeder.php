<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_title' => 'iPhone 13 Pro Max Silver - 256GB',
                'product_short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam',
                'product_full_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1199.00',
                'product_quantity' => 100,
                'product_image_path' => '/images/products/',
                'product_image' => 'iphone1-2.jpg',
                'product_category' => 'Silver',
                'product_group' => 'default',
                'product_is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'product_title' => 'iPhone 14 Pro Max Gold - 256GB',
                'product_short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam',
                'product_full_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dicta reiciendis odio consequuntur sunt magnam eum facilis quaerat dolor aperiam labore facere amet officiis, unde quae distinctio earum culpa omnis soluta voluptate tempora placeat?.',
                'product_price' => '1199.00',
                'product_quantity' => 100,
                'product_image_path' => '/images/products/',
                'product_image' => 'iphone1-1.jpg',
                'product_category' => 'Gold',
                'product_group' => 'default',
                'product_is_active' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
    // End of run function
}
// End of class
