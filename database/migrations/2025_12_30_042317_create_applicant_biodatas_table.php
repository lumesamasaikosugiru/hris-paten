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
        Schema::create('applicant_biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('ktp')->unique();
            $table->string('fullname');
            $table->enum('gender', ['L', 'P']);
            $table->date('birthday');
            $table->string('address_street');
            $table->string('address_district');
            $table->string('address_city');
            $table->enum('marital_status', ['single', 'married', 'widowed', 'divorced', 'separated']);
            $table->string('ethnicity');
            $table->string('phone')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicant_biodatas');
    }
};
