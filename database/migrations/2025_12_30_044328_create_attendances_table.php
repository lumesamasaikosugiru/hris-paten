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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->nullOnDelete();
            $table->foreignId('school_id')->constrained()->nullOnDelete();
            $table->date('date');
            $table->time('check_in_time');
            $table->time('check_out_time');
            $table->string('check_in_location');
            $table->string('check_out_location');
            $table->boolean('is_late');
            $table->integer('minutes_late')->default(0);
            $table->time('work_time');
            $table->enum('status', ['present', 'absent', 'remote', 'leave']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
