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
        Schema::create('storages', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->unsignedInteger('beginning_inventory');
            $table->unsignedInteger('receiving');
            $table->unsignedInteger('dispatching');
            $table->unsignedInteger('ending_inventory');
            $table->enum('status',  ['In Production', 'Shipped', 'Reserved', 'In Stock', 'Out of Stock', 'Published', 'Draft', 'Pending', ]);
            $table->unsignedBigInteger('manufactures_id');
            $table->foreign('manufactures_id')->references('id')->on('manufactures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storages');
    }
};
