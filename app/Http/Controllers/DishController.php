<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dish;

class DishController extends Controller
{
    
    public function index() {
    // Загружаем блюда вместе с их категориями, чтобы избежать N+1 запросов
    $dishes = Dish::with('category')->get();
    return view('dishes', compact('dishes'));
    }

    public function showIngredients($id) {
        $dish = Dish::with('ingredients')->findOrFail($id);
       return view('dish_ingredient', compact('dish'));
    }
    
}
