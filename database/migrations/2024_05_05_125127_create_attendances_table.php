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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('u_id')->nullable();
            $table->timestamp('punch_in')->nullable();
            $table->string('punch_in_remarks')->nullable();
            $table->enum('punch_in_status',['On Time','Late',]);
            $table->timestamp('punch_out')->nullable();
            $table->string('punch_out_remarks')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
