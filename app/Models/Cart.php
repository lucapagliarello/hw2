<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Cart extends Model
{
    protected $table = 'cart';
    protected $fillable = ['user_id', 'title', 'snippet', 'price', 'thumbnail'];
    public $timestamps = false;

    public function user() {
        return $this->belongsTo(User::class);
    }
}
