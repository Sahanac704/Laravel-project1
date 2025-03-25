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
        Schema::create('system_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('phone_number');
            $table->string('email');
            $table->string('address');
            $table->string('map_url');
            $table->string('facebook_url');
            $table->string('logo');
            $table->string('thumbnail');
            $table->string('instagram_url');
            $table->string('twitter_url');
            $table->string('tiktok_url');
            $table->string('pininterest_url');
            $table->string('youtube_url');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_settings');
    }
};
