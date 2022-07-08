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
        Schema::create('kategori_clothings', function (Blueprint $table) {
            $table->bigInteger('kategori_id')->unsigned()->index();
            $table->bigInteger('clothing_id')->unsigned()->index();

            $table->foreign('kategori_id')-> references('id')->on('kategoris');
            $table->foreign('clothing_id')-> references('id')->on('clothings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_clothings');
    }
};
