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

            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('address');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->string('access');
            $table->string('instagram_post_link')->nullable();
            $table->string('facebook_post_link')->nullable();
            $table->string('creator')->nullable();
            $table->text('summary')->nullable();

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
