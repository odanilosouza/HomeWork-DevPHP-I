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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sellers_id');
            $table->decimal('value_sale', 10, 2);
            $table->decimal('commission', 10, 2);
            $table->date('data_sale')->default(now());
            $table->timestamps();

            $table->foreign('sellers_id')->references('id')->on('sellers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
