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
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->nullOnDelete();
            $table->foreignId('school_id')->constrained()->nullOnDelete();
            $table->foreignId('leave_type_id')->constrained()->nullOnDelete();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('total_days');
            $table->string('reason');
            $table->enum('status', ['pending', 'approved', 'rejected']);
            $table->foreignId('approved_by')->constrained('users')->nullOnDelete();
            $table->timestamp('approved_at');
            $table->string('declined_reason');
            $table->string('attachement_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_requests');
    }
};
