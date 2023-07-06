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
        Schema::create('courseinformations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('courses_id')->constrained();
            $table->foreignId('student_id')->constrained();
            $table->foreignId('teacher_id')->constrained();
           // $table->foreignId('courses_id')->constrained();
            $table->string('score');
            $table->string('year_chosen');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courseinformations');
    }
};
