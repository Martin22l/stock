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
        Schema::create('grupo_producto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('grupo_id')
                  ->constrained(table: 'grupos' )
                  ->onUpdate('cascade')
                  ->onDelete('Restrict');
            $table->foreignId('producto_id')
                ->constrained( table: 'productos' )
                ->onUpdate('cascade')
                ->onDelete('Restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupo_producto');
    }
};
