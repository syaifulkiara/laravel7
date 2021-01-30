<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOvertimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overtimes', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user')->unsigned();
            $table->date('day_date');
            $table->time('start')->nullable();
            $table->time('finish')->nullable();
            $table->text('ot')->nullable();
            $table->text('project_no')->nullable();
            $table->text('activity')->nullable();
            $table->string('location')->nullable();
            $table->text('cek')->nullable();
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
        Schema::dropIfExists('overtimes');
    }
}
