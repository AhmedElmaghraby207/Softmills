<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price'];

    public function customers()
    {
        return $this->belongsToMany('App\User', 'product_user')->withTimestamps();
    }
}
