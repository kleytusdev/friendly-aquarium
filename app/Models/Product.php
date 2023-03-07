<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\ProductImage;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'slug',
      'description',
      'price',
      'quantity',
      'status',
      'category_id',
    ];

    public function category(){
      return $this->belongsTo(Category::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImage::class);
    }
}
