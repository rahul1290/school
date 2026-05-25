<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            // Student Information
            $table->string('name');
            $table->string('class');
            $table->date('dob');
            $table->string('dob_words');
            $table->string('category');
            $table->string('caste');
            $table->string('gender');
            $table->string('nationality');
            $table->string('aadhaar_no');
            $table->string('apaar_id');
            $table->string('pen_no');
            $table->string('bank_account_no');

            // Previous School Details
            $table->string('prev_school_name')->nullable();
            $table->string('prev_class')->nullable();
            $table->string('prev_passing_year')->nullable();
            $table->string('prev_medium')->nullable();
            $table->string('prev_board')->nullable();

            // Parent / Guardian Details
            $table->string('father_name');
            $table->string('father_aadhaar');
            $table->string('father_occupation');
            $table->string('father_mobile');
            $table->string('mother_name');
            $table->string('mother_aadhaar');
            $table->string('mother_occupation');
            $table->string('mother_mobile');

            // Residential Address
            $table->string('address_line_1');
            $table->string('address_line_2')->nullable();
            $table->string('state');
            $table->string('pin_code');

            // Admin / Office Use
            $table->enum('status', ['Pending', 'Approved', 'Rejected'])->default('Pending');
            $table->string('admission_no')->nullable();
            $table->date('admission_date')->nullable();
            $table->string('verified_by')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissions');
    }
}
