<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('applicant_education', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applicant_biodata_id')->constrained()->cascadeOnDelete();
            $table->enum('education_level', ['SD', 'SMP', 'SMK', 'D1', 'D2', 'D3', 'D4', 'S1', 'S2', 'S3']);
            $table->string('program_study');
            $table->date('graduation_date');
            $table->string('university_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_education');
    }
};
