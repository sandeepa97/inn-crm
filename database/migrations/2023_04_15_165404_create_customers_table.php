<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('saluation')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('mobile')->nullable();
            $table->string('nic')->nullable();
            $table->string('passport')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('location')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->enum('disabled', ['t', 'f'])->default('f');
            $table->dateTime('disabled_date')->nullable();
            $table->string('disabled_reason')->nullable();
            $table->string('disabled_by')->nullable();
            $table->string('secret_question')->nullable();
            $table->string('secret_answer')->nullable();
            $table->dateTime('creation_date')->default(Carbon::now());
            $table->string('created_by')->nullable();
            $table->dateTime('update_date')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
