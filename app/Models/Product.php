<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->belongsToMany(Order::class, 'order_product' );
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
}
