<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('mobile');
            //$table->string('fathername');
            //$table->string('gender');
            //$table->date('dateofbirth');
            //$table->string('address');
            //$table->string('pincode');
            //$table->string('fathermobile');
            $table->string('is_verified')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('course');
            $table->string('specialization');
            $table->string('institute');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
