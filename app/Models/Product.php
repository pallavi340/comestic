<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $guarded = [];

    public function category(){
     return $this->hasOne(Category::class,"id","category_id");
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = Str::slug($product->title);
        });
    }
}
