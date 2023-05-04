<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructorMasterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructor_master', function (Blueprint $table) {
            $table->id('instructor_id');
            $table->timestamps();
            $table->string('instructor_name');
            $table->string('instructor_profile');
            $table->string('instructor_pfp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructor_master');
    }
}
