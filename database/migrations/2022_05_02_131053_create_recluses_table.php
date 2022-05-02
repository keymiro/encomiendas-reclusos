<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReclusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recluses', function (Blueprint $table) {
            $table->id();
            $table->string('idtypedocument',10)->comment('tipo de documento');
            $table->string('document',30)->comment('documneto');
            $table->string('coderecluse',20)->comment('codigo del recluso');
            $table->string('Sex',10)->comment('Sexo');
            $table->string('namerecluse',100)->comment('Nombre del recluso');
            $table->string('surnamerecluse',100)->comment('Apellidos');
            $table->string('idpavilions',30)->comment('pabellon');
            $table->string('jailcells',30)->comment('celda');
            $table->string('state',1)->comment('Estado del recluso');
            $table->unsignedBigInteger('idusercreate')->comment('Usuario que crea');
            $table->unsignedBigInteger('iduseredit')->comment('Usuario que edita')->nullable();
            $table->foreign('idusercreate')->references('id')->on('users');
            $table->foreign('iduseredit')->references('id')->on('users');
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
        Schema::dropIfExists('recluses');
    }
}
