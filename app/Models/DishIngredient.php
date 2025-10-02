<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DishIngredient extends Model
{
    protected $table = 'dish_ingredient';

    public function dish()
    {
        return $this->belongsTo(Dish::class);
    }

    public function ingredient()
    {
        return $this->belongsTo(Ingredient::class); 
    }
}
