<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Order;
use App\Models\User;
use App\Models\Product;
class Company extends Model
{
    use HasFactory;

    public function createdBy()
    {
        return $this->belongsTo(User::class ,'created_by');
    }

    public function users()
    {
        return $this->belongsToMany(User::class , 'company_users');
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
