<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('empresa')->nullable();
            $table->string('telefono', 25)->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('direccion')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('proveedores'); }
};
