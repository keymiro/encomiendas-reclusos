<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemreturnpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temreturnpackages', function (Blueprint $table) {
            $table->string('idtemreturn')->comment('es la suma del elemento que se tiene por entregar al recluso');
            $table->unsignedBigInteger('idpackagesreturn')->comment('es el paquete a devolver');
            $table->unsignedBigInteger('idusercreate')->comment('Usuario que crea');
            $table->foreign('idusercreate')->references('id')->on('users');
            $table->foreign('idpackagesreturn')->references('id')->on('packages');
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
        Schema::dropIfExists('temreturnpackages');
    }
}
