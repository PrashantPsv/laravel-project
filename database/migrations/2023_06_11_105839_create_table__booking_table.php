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
        Schema::create('table__booking', function (Blueprint $table) {
            $table->id();
            $table->string('Category')->nullable();
            $table->string('level')->nullable();
            $table->string('language')->nullable();
            $table->string('description')->nullable();
            $table->string('price')->nullable();
            $table->string('duration')->nullable();
            $table->string('spot')->nullable();
            $table->string('days')->nullable();
            $table->string('start_date')->nullable();
            $table->string('sun_start_time')->nullable();
            $table->string('mon_start_time')->nullable();
            $table->string('tue_start_time')->nullable();
            $table->string('wed_start_time')->nullable();
            $table->string('thu_start_time')->nullable();
            $table->string('fri_start_time')->nullable();
            $table->string('sat_start_time')->nullable();
            $table->string('end_date')->nullable();
            $table->string('start_time')->nullable();
            $table->string('end_time')->nullable();
            $table->string('sun_end_time')->nullable();
            $table->string('mon_end_time')->nullable();
            $table->string('tue_end_time')->nullable();
            $table->string('wed_end_time')->nullable();
            $table->string('thu_end_time')->nullable();
            $table->string('fri_end_time')->nullable();
            $table->string('sat_end_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table__booking');
    }
};
