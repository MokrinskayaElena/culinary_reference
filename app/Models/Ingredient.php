<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredient';

     public function dishes()
    {
        return $this->belongsToMany(Dish::class, 'dish_ingredient')
        ->withPivot('quantity');;
    }
}
