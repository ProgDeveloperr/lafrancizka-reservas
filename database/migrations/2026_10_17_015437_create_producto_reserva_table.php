<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('producto_reserva', function (Blueprint $table) {
            $table->foreignId('producto_id')
                ->constrained('productos')
                ->cascadeOnDelete();

            $table->foreignId('reserva_id')
                ->constrained('reservas')
                ->cascadeOnDelete();

            $table->primary(['producto_id', 'reserva_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('producto_reserva');
    }
};