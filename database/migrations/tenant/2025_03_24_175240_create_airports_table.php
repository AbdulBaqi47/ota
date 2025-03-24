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
        Schema::create('airports', function (Blueprint $table) {
            $table->id();
            $table->string('ident', 255);
            $table->string('name', 255);
            $table->string('coordinates', 255);
            $table->string('continent', 255);
            $table->string('iso_country', 255);
            $table->string('country', 255);
            $table->string('iso_region', 255);
            $table->string('municipality', 255)->nullable();
            $table->string('gps_code', 255)->nullable();
            $table->string('iata_code', 255)->nullable();
            $table->string('local_code', 255)->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airports');
    }
};
