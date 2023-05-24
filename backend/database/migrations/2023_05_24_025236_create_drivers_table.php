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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name',50);
            $table->string('second_name',50)->nullable();
            $table->string('last_name',50);
            $table->unsignedBigInteger('document');
            $table->unsignedBigInteger('phone');
            $table->string('direction',30);
            $table->foreignId('type_doc_id')->references('id')->on('type_docs');
            $table->foreignId('city_id')->references('id')->on('cities');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
