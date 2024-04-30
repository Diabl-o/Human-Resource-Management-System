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



        Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('first_name',20);
        $table->string('last_name',20);
        $table->date('date_of_birth')->nullable();
        $table->string('email',50)->unique();
        $table->string('phone1',11)->nullable();
        $table->string('phone2',11)->nullable();
        $table->unsignedBigInteger('blood_group_id')->nullable();
        $table->string('health_condition',255)->nullable();
        $table->unsignedBigInteger('position_id')->nullable();          
        $table->binary('image_blob')->nullable();
        $table->string('image_type')->nullable();
        $table->string('password');
        $table->rememberToken();
        $table->timestamps();
        
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::dropIfExists('users');
        
    }
};
