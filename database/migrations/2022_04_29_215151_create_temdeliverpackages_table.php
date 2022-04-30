<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemdeliverpackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temdeliverpackages', function (Blueprint $table) {
            $table->string('idtem')->comment('es la suma del elemento que se tiene por entregar al recluso');
            $table->unsignedBigInteger('idpackages')->comment('es el paquete a entregar');
            $table->unsignedBigInteger('idusercreate')->comment('Usuario que crea');
            $table->foreign('idusercreate')->references('id')->on('users');
            $table->foreign('idpackages')->references('id')->on('packages');
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
        Schema::dropIfExists('temdeliverpackages');
    }
}
