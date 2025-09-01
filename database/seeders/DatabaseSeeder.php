<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'admin@gmail.com',
        // ]);

        if (!User::exists()) {

            User::create([
                'name' => "Admin Name",
                'email' => "admin@gmail.com",
                'password' => Hash::make('123')
            ]);
        }

        // $productIds = Product::pluck('id');

        // if ($productIds->isEmpty()) {
        //     $this->command->error('No products found. Please create products before seeding orders.');
        //     return;
        // }

        // $product = Product::find($productIds[0]);
        // if (!$product) {
        //     $this->command->error('No products found. Please create products before seeding orders.');
        //     return;
        // }



        // Order::create([
        //     'id' => Str::uuid(), // generates UUID
        //     'product_id' => $productIds[0],

        //     'user_email' => 'john@example.com',
        //     'user_name' => 'John Doe',
        //     'user_phone' => '9876543210',

        //     'shipping_street_address' => '123 Main Street',
        //     'shipping_city' => 'Kolkata',
        //     'shipping_state_province' => 'West Bengal',
        //     'shipping_postal_code' => '700001',
        //     'shipping_country' => 'IN',

        //     'quantity' => 2,
        //     'price' => $product->price,
        //     'tax' => $product->price * 0.18 * 2, // Assuming 18% tax
        //     'total_price' => $product->price * 2 + ($product->price * 0.18 * 2), // Total price including tax
        // ]);
    }
}
