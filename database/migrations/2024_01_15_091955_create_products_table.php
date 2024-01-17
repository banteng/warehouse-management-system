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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_code')->unique(); // BJT-001
            $table->string('product_name')->length(100); // Arminu Cup 200ml
            $table->decimal('product_selling_price', 10, 0); // 20.000
            $table->unsignedInteger('product_stock'); // 50
            $table->date('expired_product'); // 2025-01-01
            $table->unsignedBigInteger('unit_id'); // Dos
            $table->string('warehouse_rack'); // Dos
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
