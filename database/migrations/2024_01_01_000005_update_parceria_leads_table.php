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
        Schema::table('parceria_leads', function (Blueprint $table) {
            $table->boolean('aceite_termos')->default(false)->after('email');
            $table->string('conta_xp')->nullable()->change();
            $table->string('faixa_investimento')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('parceria_leads', function (Blueprint $table) {
            $table->dropColumn('aceite_termos');
            $table->string('conta_xp')->nullable(false)->change();
            $table->string('faixa_investimento')->nullable(false)->change();
        });
    }
};

