<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_application_details', function (Blueprint $table) {
            $table->id('applicationid');
            $table->string('userid');
            $table->string('fathername');
            $table->string('gender');
            $table->date('dateofbirth');
            $table->string('address');
            $table->string('pincode');
            $table->string('fathermobile');
            $table->string('applicationforprogram');
            $table->string('coursename');
            $table->string('applicationstatus');
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
        Schema::dropIfExists('_application_details');
    }
}
