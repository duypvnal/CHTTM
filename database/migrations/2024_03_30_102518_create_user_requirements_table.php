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
        Schema::create('user_requirements', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->boolean('gender')->nullable();
            $table->integer('experience')->nullable();
            $table->integer('salary_expect')->nullable();
            $table->json('skill_ids')->nullable();
            $table->json('job_position_ids')->nullable();
            $table->json('category_ids')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_requirements');
    }
};
