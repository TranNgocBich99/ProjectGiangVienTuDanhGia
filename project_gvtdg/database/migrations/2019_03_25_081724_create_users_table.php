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
            $table->bigIncrements('us_id');
            $table->string('us_name');
            $table->integer('us_is_admin', 1)->nullable();
            $table->integer('us_is_active',1)->nullable();
            $table->integer('us_sci_id',11);
            $table->integer('us_id_school', 11);
            $table->string('password');
            $table->string('email');
            $table->string('us_avatar');
            $table->integer('status', 0);
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
        Schema::dropIfExists('users');
    }
}
