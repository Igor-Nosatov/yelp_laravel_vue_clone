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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment(' A string column that holds the name of the event');
            $table->text('description')->comment(' A text column that holds the description of the event');
            $table->string('start_time', 255)->comment('A datetime column that holds the start time of the event');
            $table->string('end_time', 255)->comment(' A datetime column that holds the end time of the event');
            $table->string('location', 255)->comment('A string column that holds the address or location of the event');
            $table->string('image', 255)->comment('A string column that holds the URL of the image associated with the event');
            $table->string('url', 255)->comment('A string column that holds the URL of the event page on the website');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
