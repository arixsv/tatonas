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
            $table->string('location', 50)->nullable()->change();
            $table->tinyInteger('timezone')->nullable()->change();
            $table->date('local_time');
            $table->decimal('latitude', 9,6)->nullable()->change();
            $table->decimal('longtitude', 9,6)->nullable()->change();
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
        Schema::dropIfExists('hardware');
    }
};
