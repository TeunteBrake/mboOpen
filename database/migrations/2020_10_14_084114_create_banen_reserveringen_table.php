<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanenReserveringenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banenReserveringen', function (Blueprint $table) {
            $table->id();
            $table->integer('baanID');
            $table->integer('userID');
            $table->dateTime('datum');
            $table->integer('tijdsDuur');
            $table->string('omschrijving');
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
        Schema::dropIfExists('banenReserveringen');
    }
}
