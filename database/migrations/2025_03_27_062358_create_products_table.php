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
            $table->id();

            $table->string('thumbnail');
            $table->string('name');
            $table->string('detail');
            $table->string('price');
            $table->string('discount');
            $table->string('category_id');
            $table->string('size');
            $table->string('color');
            $table->string('total_quantity');
            $table->string('purchased_quantity')->nullable();
            $table->softDeletes();

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
