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
        Schema::create('hardware', function (Blueprint $table){
            $table->string('hardware', 4)->primary();
            $table->string('location', 50)->nullable();
            $table->tinyInteger('timezone')->nullable();
            $table->date('local_time');
            $table->decimal('latitude', 9,6)->nullable();
            $table->decimal('longtitude', 9,6)->nullable();
            $table->string('created_by', 50)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hardware');
    }
};
