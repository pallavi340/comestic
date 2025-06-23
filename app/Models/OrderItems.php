<?php

namespace App\Models;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class OrderItems extends Model
{
    public function product(): HasOne
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function orderItems()
{
    return $this->hasMany(OrderItems::class);
}
    protected $fillable = [
        'order_id',
        'product_id',
        'user_id',
        'qty',
        'isOrdered',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }


}
