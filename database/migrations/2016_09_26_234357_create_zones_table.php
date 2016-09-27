<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zones', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->float('hourly_price', 8, 2);
            $table->char('currency',1);
            $table->string('country');
            $table->string('center_coordinate',60);
            $table->timestamps();
            $table->foreign('owner_id')->references('id')->on('owners');
            $table->index(['country', 'center_coordinate']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('zones');
    }
}
