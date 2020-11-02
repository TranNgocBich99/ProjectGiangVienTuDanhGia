<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistic', function (Blueprint $table) {
            $table->bigIncrements('st_id');
            $table->integer('st_us_id');
            $table->integer('st_sum_point');
            $table->double('st_standard_deviation');
            $table->double('average_score');
            $table->integer('se_id');
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
        Schema::dropIfExists('statistic');
    }
}
