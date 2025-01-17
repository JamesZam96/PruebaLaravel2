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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('dish_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            //$table->foreign('categery_id')->references('id')->on('categories');
            $table->foreign('dish_id')->references('id')->on('dishes');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
