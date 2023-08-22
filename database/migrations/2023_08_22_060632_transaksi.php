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
        Schema::create('transaksi', function (Blueprint $table){
            $table->tinyInteger('trans_id')->primary();
            $table->string('hardware', 4)->refrences('hardware')->on('hardware');
            $table->jsonb('parameter')->nullable();
            $table->string('created_by', 4)->refrences('hardware')->on('hardware');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
