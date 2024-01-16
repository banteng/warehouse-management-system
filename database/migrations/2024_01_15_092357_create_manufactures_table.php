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
        Schema::create('manufactures', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedInteger('receiving');
            $table->unsignedInteger('dispatching');
            $table->unsignedInteger('total_receiving');
            $table->unsignedInteger('total_dispatching');
            $table->unsignedInteger('ending_inventory');
            $table->unsignedBigInteger('product_id');   
            $table->enum('status',  ['In Production', 'Shipped', 'Reserved', 'In Stock', 'Out of Stock', 'Published', 'Draft', 'Pending', ]);
            $table->foreign('product_id')->references('id')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manufactures');
    }
};
