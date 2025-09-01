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
        Schema::create('products', function (Blueprint $table) {

            $table->uuid('id')->primary();

            $table->string('title');

            $table->longText('description')->nullable();

            $table->string('meta_title')->nullable();

            $table->string('keywords')->nullable();

            $table->string('meta_description')->nullable();

            $table->decimal('price', 10, 2)->default(0.00);

            $table->integer('quantity')->default(0);

            $table->enum('status', ['draft', 'published']);

            // $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
