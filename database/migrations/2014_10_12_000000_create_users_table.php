<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            //ID in table
            $table->integer('id')->unsigned();
            $table->primary('id');

            //Personal Data
            $table->string('firstName');
            $table->string('lastName');
            $table->string('additional')->default('');
            $table->string('prefix')->default('');
            $table->string('suffix')->default('');

            //work data
            $table->string('company')->default('');
            $table->string('jobTitle')->default('');
            $table->string('role')->default('');
            $table->string('email')->unique();
            $table->string('url')->default('');
            $table->string('photo')->default('noPhoto.png');

            //cretendial attributes
            $table->string('password');
            $table->rememberToken();

            //time for create and update
            $table->timestamps();

            //Partial delete

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
