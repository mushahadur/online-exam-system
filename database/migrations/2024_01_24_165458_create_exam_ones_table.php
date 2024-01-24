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
        Schema::create('exam_ones', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('ans_one');
            $table->string('ans_two');
            $table->string('ans_three');
            $table->string('correct_ans');
            $table->string('question_mark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_ones');
    }
};
