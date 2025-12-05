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
        Schema::create('parceria_leads', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->string('conta_xp'); // 'sim' ou 'nao'
            $table->string('faixa_investimento'); // 'ate_100_mil', '100_mil_a_300_mil', '300_mil_a_1_milhao', '1_milhao_a_5_milhoes', 'acima_5_milhoes'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parceria_leads');
    }
};

