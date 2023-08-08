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
        Schema::create('reply_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('review_id')->nullable();
            $table->unsignedBigInteger('preview_id')->nullable();
            $table->string('reply', 500);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reply_reviews');
    }
};
