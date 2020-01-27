<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeName($query, $name)
    {
        if (!is_null($name)) {
            return $query->where('name', 'like', '%'.$name.'%');
        }

        return $query;
    }

    public function scopePrice($query, $price)
    {
        if (!is_null($price)) {
            return $query->where(compact('price'));
        }

        return $query;
    }
}
