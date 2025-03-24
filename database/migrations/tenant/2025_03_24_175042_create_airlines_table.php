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
        Schema::create('airlines', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('thumbnail', 255)->nullable();
            $table->string('iata_desi', 255)->nullable();
            $table->string('iata_code', 255)->nullable();
            $table->string('icao_code', 255)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unsignedBigInteger('country_id');
            $table->timestamp('deleted_at')->nullable();
            $table->string('issuing_pcc', 255)->nullable();
            $table->string('reserving_pcc', 255)->nullable();
            $table->string('tour_code', 255)->nullable();
            $table->unsignedBigInteger('supplier_id')->nullable();
            $table->json('preferred_airlines')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
};
