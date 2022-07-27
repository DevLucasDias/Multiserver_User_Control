<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PabxUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pabxusers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('user')->unique();
            $table->string('password');
            $table->string('acess');
            $table->integer('samu');
            $table->integer('pj');
            $table->string('created_by');
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
        Schema::dropIfExists('pabxusers');
    }
}
