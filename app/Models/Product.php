<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'title', 'description', 'meta_title', 'keywords', 'meta_description', 'price', 'quantity', 'status'];

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    public function multipleImages()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function singleImage()
    {
        return $this->hasOne(ProductImage::class);
    }
}
