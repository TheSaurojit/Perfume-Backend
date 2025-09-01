<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {

            $table->uuid('id')->primary();

            $table->uuid('product_id');

            // Customer information
            $table->string('email');
            $table->string('name');
            $table->string('phone');


            // Enhanced shipping information
            $table->string('country', 100);
            $table->string('state', 100)->nullable();
            $table->string('city', 100);
            $table->string('zip_code', 20);
            $table->string('address_line', 255);

            $table->text('payment_screenshot');


            // Order details
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            // $table->decimal('tax', 10, 2);
            $table->decimal('total_price', 10, 2);

            $table->enum('status', ['pending', 'processing', 'shipped', 'delivered', 'cancelled'])->default('pending');

            $table->enum('payment_status', ['unverified','verified'])->default('unverified'); // Payment status of the order

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
