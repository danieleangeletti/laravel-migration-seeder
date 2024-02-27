<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 32);
            $table->date('date');
            $table->string('departure_station', 64);
            $table->string('arrival_station', 64);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code');
            $table->tinyInteger('carriages_number')->nullable()->unsigned();
            $table->boolean('in_time');
            $table->boolean('cancelled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
