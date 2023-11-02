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
            $table->string('name', 256)->nullable(false)->unique();
            $table->string('description')->nullable(false)->default("");
            $table->string('imgUrl')->nullable(false)->default("");
            $table->float('price')->nullable(false);
            $table->float('discountPercent')->nullable(false);
            $table->datetime('discountStart_at')->nullable();
            $table->datetime('discountEnd_at')->nullable();
            $table->timestamps();
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
