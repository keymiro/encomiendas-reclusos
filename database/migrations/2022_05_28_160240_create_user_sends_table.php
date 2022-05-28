<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sends', function (Blueprint $table) {
            $table->id();
            $table->string('type_document_send_id',10)->comment('tipo de documento de la persona que trae la ecomienda');
            $table->string('document_send',30)->comment('documento de la persona que trae la ecomienda');
            $table->string('name_send',100)->comment('Nombre de la persona que trae la ecomienda');
            $table->string('surname_send',100)->comment('Apellidos');
            $table->string('email_send',150)->comment('correo de la persona que trae la ecomienda');
            $table->string('cellphone_send',15)->comment('telefono de la persona que trae la ecomienda');
            $table->string('phone_send',15)->comment('telefono de la persona que trae la ecomienda');
            $table->string('state',10)->comment('Estado del recluso');
            $table->unsignedBigInteger('user_create_id')->comment('Usuario que crea');
            $table->unsignedBigInteger('user_edit_id')->comment('Usuario que edita')->nullable();
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
        Schema::dropIfExists('user_sends');
    }
}
