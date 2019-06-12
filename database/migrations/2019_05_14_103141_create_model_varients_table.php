<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelVarientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_varients', function (Blueprint $table) {
            $table->increments('varient_id');
            $table->string('modelvarient');
            $table->integer('vendor_id')->unsigned();
            $table->string('totalnos');
            $table->string('acinfo');
            $table->string('seats');
            $table->string('pushback');
            $table->foreign('vendor_id')->references('id')->on('vendors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_varients');
    }
}
