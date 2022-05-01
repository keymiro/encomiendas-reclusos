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
            $table->unsignedBigInteger('idtypedocument')->comment('tipo de documento');
            $table->string('document',30)->comment('documneto');
            $table->string('coderecluse',20)->comment('codigo del recluso');
            $table->string('Sex',1)->comment('Sexo');
            $table->string('namerecluse',100)->comment('Nombre del recluso');
            $table->string('surnamerecluse',100)->comment('Apellidos');
            $table->unsignedBigInteger('idpavilions')->comment('pabellon');
            $table->string('jailcells')->comment('celda');
            $table->string('state',1)->comment('Estado del recluso');
            $table->unsignedBigInteger('idusercreate')->comment('Usuario que crea');
            $table->unsignedBigInteger('iduseredit')->comment('Usuario que edita')->nullable();
            $table->foreign('idusercreate')->references('id')->on('users');
            $table->foreign('iduseredit')->references('id')->on('users');
            $table->foreign('idpavilions')->references('id')->on('pavilions');
            $table->foreign('idtypedocument')->references('id')->on('typedocs');
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
