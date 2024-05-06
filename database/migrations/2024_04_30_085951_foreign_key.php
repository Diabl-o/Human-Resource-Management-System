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
        Schema::table('emergency_contacts', function (Blueprint $table) {
            // Foreign key constraint for 'u_id' (user ID) column
            $table->foreign('u_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            
        });
        Schema::table('addresses', function (Blueprint $table) {
            // Foreign key constraint for 'u_id' (user ID) column
            $table->foreign('u_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            
            $table->foreign('e_id')
            ->references('id')
            ->on('emergency_contacts')
            ->onDelete('cascade');
            
        });

        Schema::table('bank_details', function (Blueprint $table) {
            // Foreign key constraint for 'u_id' (user ID) column
            $table->foreign('u_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            
        });
        Schema::table('office_hours', function (Blueprint $table) {
            // Foreign key constraint for 'u_id' (user ID) column
            $table->foreign('u_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('office_hours', function (Blueprint $table) {

            $table->dropForeign(['u_id']);

        });

        Schema::table('bank_details', function (Blueprint $table) {

            $table->dropForeign(['u_id']);
        });

        Schema::table('addresses', function (Blueprint $table) {

            $table->dropForeign(['u_id']);
            $table->dropForeign(['e_id']);
        });

        Schema::table('emergency_contracts', function (Blueprint $table) {
            $table->dropForeign(['u_id']);
            
        });
        
    }
};
