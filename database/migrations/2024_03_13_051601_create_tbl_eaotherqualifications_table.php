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
        Schema::create('tbl_eaotherqualifications', function (Blueprint $table) {

            $table->id('id');
            $table->integer('master_id');
            $table->string('certificate');
            $table->string('institution');
            $table->string('country');
            $table->string('year');
            $table->integer('duration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_eaotherqualifications');
    }
};
