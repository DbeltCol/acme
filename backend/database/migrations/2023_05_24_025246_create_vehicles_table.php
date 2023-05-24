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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate',10);
            $table->string('brand',50);
            $table->string('color',10);
            $table->enum('type',['particular','público'])->default('particular');
            $table->foreignId('driver_id')->references('id')->on('drivers');
            $table->foreignId('owner_id')->references('id')->on('owners');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
