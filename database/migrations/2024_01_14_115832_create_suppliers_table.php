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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->integer('supplier_code'); // SUP-001
            $table->string('supplier_name'); // PT. Satu Dua Tiga
            $table->string('supplier_address'); // Jl. Satu
            $table->string('supplier_phone'); // 081xxxxxx
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
