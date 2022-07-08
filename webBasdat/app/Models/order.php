<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function payments(){
        return $this->belongsToMany(payment::class, 'orderan_payments', 'order_id', 'payment_id');
    }
    public function invoices(){
        return $this->belongto(invoice::class);
    }
    public function keranjang_order(){
        return $this->hasTo(payment::class);
    }
}
