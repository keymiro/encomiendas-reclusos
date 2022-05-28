<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsEcomiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_ecomiendas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ecomiendas_id')->comment('Id del encabezado');
            $table->string('item',100)->comment('item');
            $table->string('count',4)->comment('cantidad');
            $table->string('Description',300)->comment('descriccón del item');
            $table->string('state',50)->comment('estado: Aceptado, Devolucion, Entregado Recluso, Entregado devolución');
            $table->unsignedBigInteger('user_create_id')->comment('Usuario que crea');
            $table->unsignedBigInteger('user_edit_id')->comment('Usuario que edita')->nullable();
            $table->unsignedBigInteger('user_entrega_id')->comment('Usuario realiza la entrega')->nullable();
            $table->dateTime('Fecha que entrega a recluso')->nullable();
            $table->unsignedBigInteger('user_devolucion_id')->comment('Usuario realiza la devolucion')->nullable();
            $table->datetime('Fecha que entrega la devolucion')->nullable();
            $table->foreign('ecomiendas_id')->references('id')->on('ecomiendas');
            $table->foreign('user_create_id')->references('id')->on('users');
            $table->foreign('user_edit_id')->references('id')->on('users');
            $table->foreign('user_entrega_id')->references('id')->on('users');
            $table->foreign('user_devolucion_id')->references('id')->on('users');
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
        Schema::dropIfExists('items_ecomiendas');
    }
}
