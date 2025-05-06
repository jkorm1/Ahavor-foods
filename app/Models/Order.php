<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'order_number', 'name', 'email', 'phone', 
        'address', 'city', 'region', 'notes', 
        'total', 'status'
    ];
    
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}