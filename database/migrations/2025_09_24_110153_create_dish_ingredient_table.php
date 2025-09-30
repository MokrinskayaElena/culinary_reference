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
        Schema::create('dish_ingredient', function (Blueprint $table) {
            $table->id()->comment('ID рецепта');
            $table->unsignedBigInteger('dish_id')->comment('ID блюда');
            $table->unsignedBigInteger('ingredient_id')->comment('ID ингредиента');
            $table->float('quantity')->comment('количество');      

            // внешний ключ на dish
            $table->foreign('dish_id')->references('id')->on('dish')->onDelete('cascade');

            // внешний ключ на ingredient
            $table->foreign('ingredient_id')->references('id')->on('ingredient')->onDelete('cascade');
        });
        // DB::statement("COMMENT ON TABLE \"dishe_ingredient\" IS 'рецепт'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish_ingredient');
    }
};
