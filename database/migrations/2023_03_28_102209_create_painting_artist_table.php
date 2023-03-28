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
            Schema::create('artist_painting', function (Blueprint $table) {
                $table->foreignId('painting_id')->constrained();
                $table->foreignId('artist_id')->constrained();
                $table->unique(["artist_id", "painting_id"], 'artist_id_painting_id_unique');
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist_painting');
    }
};
