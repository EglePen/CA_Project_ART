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
        Schema::create('movement_painting', function (Blueprint $table) {
            $table->foreignId('movement_id')->constrained();
            $table->foreignId('painting_id')->constrained();
            $table->unique(["movement_id", "painting_id"], 'movement_id_painting_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movement_painting');
    }
};
