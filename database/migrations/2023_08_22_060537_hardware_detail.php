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
        Schema::create('hardware_detail', function (Blueprint $table){
            $table->id();
            $table->string('hardware', 4)->refrences('hardware')->on('hardware');
            $table->string('sensor', 2)->refrences('sensor')->on('sensor');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware_detail');
    }
};
