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
        Schema::create('tbl_eamaster', function (Blueprint $table) {

            $table->id('id');
            $table->string('position');
            $table->string('name');
            $table->integer('staff_id');
            $table->string('fname');
            $table->string('mname');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('emergency_contact_person');
            $table->string('emergency_contact_no');
            $table->string('emergency_contact_relation');
            $table->string('job_before');
            $table->string('job_before_when')->nullable();
            $table->string('relative_working');
            $table->string('relative_working_name')->nullable();
            $table->string('relative_working_designation')->nullable();
            $table->string('relative_working_placeofwork')->nullable();
            $table->string('relative_working_telephone')->nullable();
            $table->string('nationality');
            $table->string('placeofbirth');
            $table->string('dateofbirth');
            $table->string('religion');
            $table->string('blood_group');
            $table->string('national_id_no');
            $table->string('passport_no')->nullable();
            $table->string('license')->nullable();
            $table->string('maritial_status');
            $table->string('name_of_spouse')->nullable();
            $table->string('no_of_children')->nullable();
            $table->string('other_dependents')->nullable();
            $table->string('other_income');
            $table->string('other_income_brief')->nullable();
            $table->string('category_of_membership');
            $table->string('political_organization');
            $table->string('political_organization_details')->nullable();
            $table->string('hobbies');
            $table->string('other_expertises');
            $table->string('references_one_name');
            $table->string('references_one_occupation');
            $table->string('references_one_address');
            $table->string('references_one_contactno');
            $table->string('references_one_relation');
            $table->string('references_two_name');
            $table->string('references_two_occupation');
            $table->string('references_two_address');
            $table->string('references_two_contactno');
            $table->string('references_two_relation');
            $table->string('declaration_name');
            $table->string('declaration_date');
            $table->string('declaration_signature');
            $table->tinyInteger('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_eamaster');
    }
};
