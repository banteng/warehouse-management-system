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
        Schema::create('productions', function (Blueprint $table) {
            $table->id();
            $table->string('raw_material_code'); // Karton
            $table->unsignedInteger('raw_material_stock'); // 50
            $table->unsignedBigInteger('raw_material_unit'); // Pcs
            
            $table->timestamps();

            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('raw_material_code')->references('raw_material_code')->on('raw_materials');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productions');
    }
};
