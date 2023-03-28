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
        Schema::create('country_painting', function (Blueprint $table) {
            $table->foreignId('country_id')->constrained();
            $table->foreignId('painting_id')->constrained();
            $table->unique(["country_id", "painting_id"], 'country_id_painting_id_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country_painting');
    }
};
