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
        Schema::create('transaksi_detail', function (Blueprint $table){
            $table->id();
            $table->tinyInteger('trans_id')->refrences('trans_id')->on('transaksi');
            $table->string('hardware', 4)->refrences('hardware')->on('hardware');
            $table->string('sensor', 2)->refrences('sensor')->on('sensor');
            $table->tinyInteger('value')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_detail');
    }
};
