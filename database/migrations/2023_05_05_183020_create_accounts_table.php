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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('profile_image')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('nickname')->nullable();
            $table->string('gender')->nullable();
            $table->string('headline')->nullable();
            $table->string('hometown')->nullable();
            $table->string('blog_website')->nullable();
            $table->string('second_favorite_website')->nullable();
            $table->string('last_great_book')->nullable();
            $table->string('first_concert')->nullable();
            $table->string('favorite_movie')->nullable();
            $table->string('current_crush')->nullable();
            $table->text('last_meal_earth')->nullable();
            $table->text('secret')->nullable();
            $table->text('recent_discovery')->nullable();
            $table->text('when_not_yelping')->nullable();
            $table->text('why_read_reviews')->nullable();
            $table->text('loves')->nullable();
            $table->text('find_me_in')->nullable();
            $table->boolean('friend_visibility')->nullable()->comment('Let others find my profile using my name or email address.');
            $table->boolean('bookmarks')->nullable()->comment('Make own bookmarks public');
            $table->boolean('direct_messages')->nullable()->comment('Allow business owners to send you direct messages in response to your review.');
            $table->boolean('ads')->nullable()->comment('Allow Yelp to target ads on other sites and apps.');
            $table->enum('business_visibility', ['profile', 'demographics', 'basic'])->comment('These settings govern how businesses will see actions you take through Yelp, such as, mobile calls, directions requests, map views, and visits to a business’s website.');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('primary_language_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
