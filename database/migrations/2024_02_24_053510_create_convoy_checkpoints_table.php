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
        Schema::create('convoy_checkpoints', function (Blueprint $table) {
            $table->id();
            $table->foreignId('convoy_id')->constrained();
            $table->foreignId('checkpoint_id')->constrained();
            $table->timestamp('arrival_time')->nullable();
            $table->timestamp('departure_time')->nullable();
            // Add other fields as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convoy_checkpoints');
    }
};
