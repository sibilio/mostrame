<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegiaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regioes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cidade_id');
            $table->integer('user_id');
            $table->string('nome', 45);
            $table->string('nome_no_site', 45);
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
        Schema::dropIfExists('regioes');
    }
}
