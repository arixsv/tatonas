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
        Schema::create('master_sensor', function (Blueprint $table){
            $table->string('sensor', 2)->primary();
            $table->string('sensor_name', 50)->nullable()->change();
            $table->string('unit', 10)->nullable()->change();
            $table->string('created_by', 50)->nullable()->change();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_sensor');
    }
};
