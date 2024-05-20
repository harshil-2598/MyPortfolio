<?php

use Brick\Math\BigInteger;
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
        Schema::create('eductions', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('course')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('school')->nullable();
            $table->string('grade')->nullable();
            $table->string('university')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eductions');
    }
};
