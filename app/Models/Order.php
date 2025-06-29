<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function items()
{
    return $this->hasMany(OrderItems::class, 'order_id', 'id');
}

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function coupon (){
        return $this->hasOne(Coupon::class, 'id', 'coupon_id');
    }

    public function orderItems()
{
    return $this->hasMany(OrderItems::class);
}



}
