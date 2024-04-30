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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('u_id')->nullable();
            $table->unsignedBigInteger('e_id')->nullable();
            $table->string('district',555)->nullable();
            $table->string('city',255)->nullable();
            $table->string('tole',255)->nullable();
            $table->string('ward_no')->nullable();
            $table->string('zipcode',15)->nullable();
            $table->string('zone',255)->nullable();
            $table->enum('type',['Temporary','Permanent']);
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
