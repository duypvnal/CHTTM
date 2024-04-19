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
        Schema::create('current_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('company_id');
            $table->date('due_date');
            $table->integer('salary_form')->nullable();
            $table->integer('salary_to')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('level')->nullable();
            $table->integer('experience')->nullable();
            $table->integer('job_type')->nullable(); // 0: full-time, 1: part-time, 3: hybrid, 4: remote
            $table->boolean('gender')->nullable();
            $table->json('skill_ids')->nullable();
            $table->json('job_position_ids')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('current_jobs');
    }
};
