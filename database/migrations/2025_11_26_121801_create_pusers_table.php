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
        Schema::create('pusers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('pusername')->unique();
            $table->string('email');
            $table->string('profile')->nullable();
            $table->string('password');
            $table->string('slug')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pusers');
    }
};
