<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    protected $fillable = ['user_id', 'title', 'snippet', 'price', 'thumbnail'];
    public $timestamps = false; //essendo che non viene utilizzato created_at e update_at

    public function user() {
        return $this->belongsTo(User::class);
    }
}
