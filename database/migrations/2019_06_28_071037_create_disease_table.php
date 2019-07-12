<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiseaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disease', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('diseaseid');
            $table->string('name');
            $table->string('symid1');
            $table->string('symid2');
            $table->string('symid3');
            $table->string('symid4');
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
        Schema::dropIfExists('disease');
    }
}
