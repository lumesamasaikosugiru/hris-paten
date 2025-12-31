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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->nullOnDelete();
            $table->foreignId('school_id')->constrained()->nullOnDelete();
            $table->foreignId('department_id')->constrained()->nullOnDelete();
            $table->foreignId('position_id')->constrained()->nullOnDelete();
            $table->foreignId('applicant_biodata_id')->constrained()->nullOnDelete();
            $table->date('hire_date');
            $table->enum('status', ['active', 'inactive']);
            $table->string('photopath');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
