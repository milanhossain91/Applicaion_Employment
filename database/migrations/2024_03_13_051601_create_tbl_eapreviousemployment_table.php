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
        Schema::create('tbl_eapreviousemployment', function (Blueprint $table) {

            $table->id('id');
            $table->integer('master_id');
            $table->string('job_title');
            $table->string('name');
            $table->string('form');
            $table->string('to');
            $table->string('last_salary_drawn');
            $table->string('reason_for_leaving');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_eapreviousemployment');
    }
};
