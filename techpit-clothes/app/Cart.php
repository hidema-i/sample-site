<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //CartからProductにアクセス
    public function products()
    {
        return $this->belongsToMany(
            Product::class,
            'line_items',
        )->withPivot(['id', 'quantity']);
    }
}
