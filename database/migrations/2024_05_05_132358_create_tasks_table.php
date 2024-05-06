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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('u_id');
            $table->string('title');
            $table->string('description');
            $table->binary('attachment');
            $table->string('attachment_type');
            $table->date('deadline');
            $table->string('assigned_by');
            $table->string('assigned_to');
            $table->enum('priority',['Normal','Medium','High']);
            $table->enum('status',['New','Ongoing','In Review','Resolved']);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
