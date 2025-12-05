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
        Schema::create('curso_financas_inscricoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->string('conta_xp'); // 'sim' ou 'nao'
            $table->string('faixa_investimento'); // 'ate_100k', '100k_a_300k', '300k_a_1mm', '1mm_a_5mm', 'acima_5mm'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso_financas_inscricoes');
    }
};

