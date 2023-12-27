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
        Schema::create('mensagem', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("mensagem");
            $table->date("nascimento")->nullable();
            $table->string("whatsapp")->nullable();
            $table->string("cidade")->nullable();
            $table->string("estado")->nullable();
            $table->string("resposta")->nullable();
            $table->unsignedBigInteger("materia_id")->nullable();
            $table->string("nome_do_aluno");
            $table->string("status");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensagem');
    }
};
