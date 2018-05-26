<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('razao_social')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('endereco')->nullable();
            $table->string('telefone')->nullable();
            $table->string('contato')->nullable();
            $table->text('acessos')->nullable();
            $table->text('observacoes')->nullable();

            $table->string('site')->nullable();
            $table->string('site_login')->nullable();
            $table->string('site_senha')->nullable();

            $table->string('ftp_host')->nullable();
            $table->string('ftp_login')->nullable();
            $table->string('ftp_senha')->nullable();

            $table->string('hospedagem')->nullable();
            $table->string('hospedagem_login')->nullable();
            $table->string('hospedagem_senha')->nullable();

            $table->text('observacoes_dev')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
