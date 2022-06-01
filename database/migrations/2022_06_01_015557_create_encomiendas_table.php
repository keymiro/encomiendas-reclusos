<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncomiendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encomiendas', function (Blueprint $table) {
            $table->id();
            $table->string('cod',30)->nullable()->comment('Codigo de ecomiendas, es el nombre del pabellon');
            $table->string('type_document_send')->comment('tipo de documento');
            $table->string('document_send')->comment('documento de quien entrega paquete');
            $table->string('names_send')->comment('nombre de quien entrega paquete');
            $table->string('email_send')->comment('email de quien entrega paquete');
            $table->string('accepted_objects',2000)->nullable()->comment('objectos aceptados de quien entrega paquete');
            $table->string('declined_objects',2000)->nullable()->comment('objectos rechazados de quien entrega paquete');
            $table->string('declined_observations',2000)->nullable()->comment('observaciones de objetos rechazados de quien entrega paquete');
            $table->string('url_img')->nullable()->comment('evidencia fotografica');
            $table->unsignedBigInteger('user_created_id')->comment('Id del usuario que crea el registro');
            $table->foreign('user_created_id')->references('id')->on('users');
            $table->unsignedBigInteger('recluse_id')->comment('Id Recluso');
            $table->foreign('recluse_id')->references('id')->on('recluses');
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
        Schema::dropIfExists('encomiendas');
    }
}
