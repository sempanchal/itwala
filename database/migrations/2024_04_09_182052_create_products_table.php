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
            $table->integer('created_by')->nullable();
            $table->string('title');
            $table->longText('description')->nullable();
            $table->enum('product_type', ['simple', 'variable'])->default($simple);
            $table->integer('regular_price');
            $table->integer('sale_price')->nullable();
            $table->integer('category_id')->nullable();
            $table->text('short_description')->nullable();
            $table->text('product_image')->nullable();
            $table->text('product_gallery')->nullable();
            $table->integer('custom_index')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
