<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalerrysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galerrys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('poto');
            $table->unsignedInteger('kategorigaleri_id');
            $table->foreign('kategorigaleri_id')->references('id')->on('kategori_galerrys')->ondelete('cascade');
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
        Schema::dropIfExists('galerrys');
    }
}
