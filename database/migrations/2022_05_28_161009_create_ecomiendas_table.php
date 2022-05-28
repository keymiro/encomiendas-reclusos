<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcomiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecomiendas', function (Blueprint $table) {
            $table->id();
            $table->string('cod',30)->comment('Codigo de ecomiendas, es el nombre del pabellon');
            $table->unsignedBigInteger('recluse_id')->comment('Id Recluso');
            $table->unsignedBigInteger('user_send_id')->comment('Id del usuario que entrega el paquete');
            $table->unsignedBigInteger('user_create_id')->comment('Usuario que crea');
            $table->unsignedBigInteger('user_edit_id')->comment('Usuario que edita')->nullable();
            $table->foreign('user_send_id')->references('id')->on('user_sends');
            $table->foreign('user_create_id')->references('id')->on('users');
            $table->foreign('user_edit_id')->references('id')->on('users');
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
        Schema::dropIfExists('ecomiendas');
    }
}
