<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clothing extends Model
{
    use HasFactory;
    public function keranjang_orders(){
        return $this->hasTo(keranjang_order::class);
    }
    public function kategori(){
        return $this->belongsToMany(kategori::class, 'kategori_id',);
    }
}
