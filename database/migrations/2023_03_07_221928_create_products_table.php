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
          $table->string('name');
          $table->string('slug');
          $table->text('description')->nullable();
          $table->decimal('price', 7, 2);
          $table->integer('quantity');
          $table->string('image')->nullable();
          $table->tinyInteger('status')->default('0')->comment('1=hidden, 0=visible');
          $table->unsignedBigInteger('category_id');
          $table->foreign('category_id')->references('id')->on('categories');
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
