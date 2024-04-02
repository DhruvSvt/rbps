<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissionforms', function (Blueprint $table) {
            $table->id();
            $table->string('student_name')->nullable();
            $table->string('previous_school_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('admitted_class')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('dob')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('contact_no')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admissionforms');
    }
};
