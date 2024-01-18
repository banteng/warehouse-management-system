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
        Schema::create('raw_materials', function (Blueprint $table) {
            $table->id();
            $table->string('raw_material_code')->unique(); // BMT-001
            $table->string('raw_material_name')->length(100); // Karton
            $table->decimal('raw_material_unit_price', 10, 2); //10.000
            $table->unsignedInteger('raw_material_stock'); // 50
            $table->unsignedBigInteger('unit_id'); // Pcs
            $table->unsignedBigInteger('supplier_code'); // SUP-001
            $table->enum('status',  ['Shipping', 'Shipped', 'Reserved', 'In Production']); // In Production
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('supplier_code')->references('id')->on('suppliers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('raw_materials');
    }
};
