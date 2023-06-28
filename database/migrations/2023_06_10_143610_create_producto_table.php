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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('name');
            $table->string('descripcion')->nullable();
            $table->string('cantidad')->default(0);
            $table->double('precio_costo', 8, 2);
            $table->foreignId('id_familia')
                ->constrained( table: 'familias' )
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
        Schema::dropIfExists('productos');
    }
};
