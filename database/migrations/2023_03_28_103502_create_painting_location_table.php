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
        Schema::create('location_painting', function (Blueprint $table) {
            $table->foreignId('location_id')->constrained();
            $table->foreignId('painting_id')->constrained();
            $table->unique(["location_id", "painting_id"], 'location_id_painting_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('location_painting');
    }
};
