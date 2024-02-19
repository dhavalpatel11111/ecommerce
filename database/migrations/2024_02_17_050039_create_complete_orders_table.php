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
        Schema::create('complete_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_name');
            $table->integer('total_product');
            $table->string('product_name');
            $table->integer('product_id_return');
            $table->string('review');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('complete_orders');
    }
};
