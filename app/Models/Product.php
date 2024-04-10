<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

     protected $fillable = [
        'title',
        'description',
        'product_type',
        'regular_price',
        'sale_price',
        'category_id',
        'short_description',
        'product_image',
        'product_gallery',
        'created_by',
        'custom_index'
    ];
}
