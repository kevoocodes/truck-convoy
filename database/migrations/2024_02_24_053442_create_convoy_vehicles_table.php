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
        Schema::create('convoy_vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('convoy_id')->constrained();
            $table->foreignId('vehicle_id')->constrained();
            // Add other fields as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convoy_vehicles');
    }
};
