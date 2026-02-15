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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nameCompleto'); // Obrigatório por padrão
            $table->string('email')->unique(); // Obrigatório e Único
            $table->string('telefone')->nullable(); // Opcional (nullable)
            $table->timestamps(); // Cria o created_at (Data de Cadastro automática)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
