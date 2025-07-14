<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }

    public function cartItems()
    {
        return $this->hasMany(\App\Models\Cart::class);
    }
}
