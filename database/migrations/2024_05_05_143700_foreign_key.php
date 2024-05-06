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
        Schema::table('attendances', function (Blueprint $table) {
            // Foreign key constraint for 'u_id' (user ID) column
            $table->foreign('u_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            
        });
        Schema::table('tasks', function (Blueprint $table) {
            // Foreign key constraint for 'u_id' (user ID) column
            $table->foreign('u_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            
        });

        Schema::table('task_comments', function (Blueprint $table) {
            // Foreign key constraint for 'u_id' (user ID) column
            $table->foreign('t_id')
                ->references('id')
                ->on('tasks')
                ->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
