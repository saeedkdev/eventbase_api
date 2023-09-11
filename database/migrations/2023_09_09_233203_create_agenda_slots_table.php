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
        Schema::create('agenda_slots', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('agenda_id');
            $table->unsignedInteger('session_id')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->date('date')->nullable();
            $table->text('details');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda_slots');
    }
};
