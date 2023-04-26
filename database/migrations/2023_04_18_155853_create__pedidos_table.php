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
        Schema::create('_pedidos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Fecha_de_pedido');
            $table->string('Estado_del_pedido');
            $table->integer('Total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_pedidos');
    }
};
