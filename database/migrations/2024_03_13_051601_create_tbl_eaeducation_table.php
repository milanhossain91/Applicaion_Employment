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
        Schema::create('tbl_eaeducation', function (Blueprint $table) {

            $table->id('id');
            $table->integer('master_id');
            $table->string('degree_title');
            $table->string('name_of_institution');
            $table->integer('year_of_passing');
            $table->string('group');
            $table->string('gpa');
            $table->string('achievements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_eaeducation');
    }
};
