<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrderInvoicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderInvoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_no')->nullable();
            $table->string('order_no')->nullable();
            $table->string('next_invoice_date')->nullable();
            $table->string('invoice_due_date')->nullable();
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
        Schema::drop('OrderInvoices');
    }
}
