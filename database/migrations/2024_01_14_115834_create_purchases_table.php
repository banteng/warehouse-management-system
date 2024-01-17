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
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->string('purchase_code'); // PBL-001
            $table->date('purchase_date'); // 2024-01-01
            $table->unsignedInteger('raw_material_quantity'); // 50
            $table->decimal('raw_material_unit_price', 10, 0); // 10.000
            $table->decimal('total_raw_material_unit_price', 10, 0); // 500.000 
            $table->unsignedBigInteger('raw_material_code'); // BMT-001
            $table->unsignedBigInteger('raw_material_unit'); // Pcs
            
            $table->enum('status',  ['Paid', 'Unpaid']); // Unpaid
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('raw_material_code')->references('raw_material_code')->on('raw_materials');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
