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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('id');
            $table->decimal('total', 15, 2)->default(0);
            $table->decimal('total_reserva', 15, 2)->default(0);
            $table->string('hospede_name');
            $table->string('quarto_name');
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->enum('status', ['ativo', 'inativo'])->default('inativo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
