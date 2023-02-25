<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('brand')->nullable();
            $table->mediumText('small_description')->nullable();
            $table->longText('description')->nullable();

            $table->decimal('original_price', 7, 2);
            $table->decimal('selling_price', 7, 2);
            $table->integer('quantity');
            $table->tinyInteger('trending')->default('0')->comment('1=trending, 0=not-trending');
            $table->tinyInteger('status')->default('0')->comment('1=hidden, 0=visible');

            $table->string('meta_title');
            $table->string('meta_keyword');
            $table->string('meta_description');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
