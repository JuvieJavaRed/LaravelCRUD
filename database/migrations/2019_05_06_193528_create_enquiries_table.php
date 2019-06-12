<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('enqdate');
            $table->string('enqid');
            $table->string('cxname');
            $table->string('cxnumber');
            $table->string('whatsappnum');
            $table->string('notes');
            $table->string('startcity');
            $table->string('startarea');
            $table->string('location1');
            $table->string('location2');
            $table->string('location3');
            $table->string('endcity');
            $table->string('endarea');
            $table->date('startdate');
            $table->string('starttime');
            $table->date('enddate');
            $table->string('endtime');
            $table->integer('noofpax');
            $table->integer('totalkm');
            $table->string('vehiclepref');
            $table->string('duration');
            $table->integer('approved')->nullable($value = true);







        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enquiries');
    }
}
