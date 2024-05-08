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
        Schema::create('tbl_product', function (Blueprint $table) {
            $table->increments('product_id');
            $table->string('product_image');
            $table->string('product_image_link');
            $table->string('product_name');
            $table->text('product_content');
            $table->string('product_link');
            $table->string('product_price');
            $table->integer('product_quantity');
            $table->string('product_note');
            $table->string('product_total');
            $table->string('address');
            $table->string('warehouse_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_product');
    }
};
