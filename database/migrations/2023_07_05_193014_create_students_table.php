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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentId');
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->string('image_url');
            $table->string('gender');
            $table->string('year_joined');
            $table->string('class');
            $table->string('Age');
           // $table->foreignId('class_id')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
