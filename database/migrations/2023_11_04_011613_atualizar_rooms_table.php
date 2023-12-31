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
        Schema::table('rooms', function (Blueprint $table) {
            $table->string('price_per_day', 255)->nullable(true)->change();
            $table->bigInteger('branch_id')->nullable(true)->change();
            $table->string('status', 11)->nullable(true)->change();
            $table->string('status_reservation', 255)->nullable(true)->change();
            $table->bigInteger('created_by')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
