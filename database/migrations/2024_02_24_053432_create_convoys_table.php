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
        Schema::create('convoys', function (Blueprint $table) {
            $table->id();
            $table->string('departure_location');
            $table->string('arrival_location');
            $table->timestamp('departure_time');
            $table->timestamp('arrival_time')->nullable();
            // Add other fields as needed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('convoys');
    }
};
