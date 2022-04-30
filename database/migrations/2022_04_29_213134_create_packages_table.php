<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->text('element')->comment('Elemento');
            $table->string('stateelement')->comment('Estado del elemento');
            $table->string('supportphoto')->comment('Id del soporte de imagenes');
            $table->text('notapackage')->comment('Notas');
            $table->unsignedBigInteger('idrecluse')->comment('Id del recluso a quien le llego el paquete ');
            $table->unsignedBigInteger('idtipedocumnet')->comment('tipo de documento');
            $table->string('documnetvisitor',50)->comment('documento');
            $table->string('namevisitor',150)->comment('Nombre de la persona que trajo el paquete');
            $table->string('surnamevisitor',150)->comment('Apellidos');
            $table->string('cellphone',20)->comment('Numero de celular');
            $table->string('cellphone1',20)->comment('Numero de celular segundo soporte')->nullable();
            $table->string('email',150)->comment('Correo del visitante')->nullable();
            $table->string('idpavilions')->comment('Id del almacen del pabellon temporal donde se ubica');
            $table->unsignedBigInteger('idusercreate')->comment('Usuario que crea');
            $table->unsignedBigInteger('iduseredit')->comment('Usuario que edita')->nullable();
            $table->foreign('idusercreate')->references('id')->on('users');
            $table->foreign('iduseredit')->references('id')->on('users');
            $table->foreign('idrecluse')->references('id')->on('recluses');
            $table->foreign('idtipedocumnet')->references('id')->on('typedocs');
            $table->string('state',100)->comment('Estado 1:por entregar a recluso,2:entrego a recluso,3:devolucion a quien lo trajo');
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
        Schema::dropIfExists('packages');
    }
}
