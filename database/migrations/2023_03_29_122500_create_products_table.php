<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('wc_en');
            $table->integer('wc_fa');
            $table->integer('bath');
            $table->integer('single_bed');
            $table->integer('double_bed');
            $table->integer('capacity');
            $table->integer('price');
            $table->integer('discount');
            $table->text('description');
            $table->integer('special_offer');
            $table->integer('status');
            $table->integer('environment_id');
            $table->integer('category_id');
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
