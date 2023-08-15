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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->boolean('is_featured');
            $table->string('description', 1_000);
            $table->longText('content');
            $table->string('thumbnail');
            $table->foreignId('category_id')
                ->constrained(table: 'post_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
