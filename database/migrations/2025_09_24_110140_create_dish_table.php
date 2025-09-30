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
        Schema::create('dish', function (Blueprint $table) {
            $table->id()->comment('ID блюда');
            $table->unsignedBigInteger('category_id')->comment('ID категории');
            $table->string('name')->comment('название блюда');
            $table->text('preparation_method')->comment('способ приготовления');
            $table->integer('preparation_time')->comment('время приготовления (мин)');
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->nullable()->after('id')->comment('ID пользователя');
            
            // внешний ключ на user
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');

            // внешний ключ на category
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            
        });
        // Добавление комментария к таблице
        DB::statement("COMMENT ON TABLE \"dish\" IS 'блюдо'");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dish');
        // $table->dropForeign(['user_id']);
        // $table->dropColumn('user_id');
    }
};
