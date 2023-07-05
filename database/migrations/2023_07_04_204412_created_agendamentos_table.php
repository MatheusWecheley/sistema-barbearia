<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger("id_servico");
            $table->foreign('id_servico')->references('id')->on('servicos')->onDelete('cascade')->onUpdate('cascade');
            $table->unsignedBigInteger('id_produto');
            $table->foreign('id_produto')->references('id')->on('produtos')->onDelete('cascade')->onUpdate('cascade');
            $table->dateTime('data');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamentos');
    }
};
