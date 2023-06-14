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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('price_level', 255);
            $table->string('address', 255);
            $table->string('city', 255);
            $table->string('state', 255);
            $table->string('postal_code', 255);
            $table->string('country', 255);
            $table->string('phone', 255);
            $table->string('email', 500);
            $table->string('website', 500);
            $table->text('description');
            $table->string('latitude', 500);
            $table->string('longitude', 500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};



