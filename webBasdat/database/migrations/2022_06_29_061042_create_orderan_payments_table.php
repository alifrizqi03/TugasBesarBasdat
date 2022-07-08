<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderan_payments', function (Blueprint $table) {
            $table->bigInteger('order_id')->unsigned()->index();
            $table->bigInteger('payment_id')->unsigned()->index();

            $table->foreign('payment_id')-> references('id')->on('payments');
            $table->foreign('order_id')-> references('id')->on('orders');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderan_payments');
    }
};
