<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePavilionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pavilions', function (Blueprint $table) {
            $table->id();
            $table->string('namepavilions',100)->comment('Nombre del pabellon');
            $table->unsignedBigInteger('idusercreate')->comment('Usuario que crea');
            $table->unsignedBigInteger('iduseredit')->comment('Usuario que edita')->nullable();;
            $table->foreign('idusercreate')->references('id')->on('users');
            $table->foreign('iduseredit')->references('id')->on('users');
            $table->string('state',1)->comment('Estado de pabellon');
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
        Schema::dropIfExists('pavilions');
    }
}
