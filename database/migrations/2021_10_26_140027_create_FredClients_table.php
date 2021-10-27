<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFredClientsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FredClients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('host')->nullable();
            $table->string('port')->nullable();
            $table->string('path')->nullable();
            $table->string('transport')->nullable();
            $table->string('e_p_p__u_s_e_r')->nullable();
            $table->string('e_p_p__p_w_d')->nullable();
            $table->timestamps();
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
        Schema::drop('FredClients');
    }
}
