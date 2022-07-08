<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang_order extends Model
{
    use HasFactory;
    public function orders(){
        return $this->belongsToMany(order::class, 'order_id',);
    }
    public function clothing(){
        return $this->belongsToMany(clothing::class, 'clothing_id',);
    }
}
