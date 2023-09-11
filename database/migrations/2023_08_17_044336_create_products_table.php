<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('slug', 50)->unique();
            $table->string('description', 255);
            $table->boolean('is_featured');
            $table->string('thumbnail')->nullable();
            $table->float('price');
            $table->foreignId('category_id')
                ->constrained(
                    table: 'product_categories',
                );
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
