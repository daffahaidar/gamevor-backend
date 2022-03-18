<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // yang akan diisi
    protected $fillable = [
        'name',
        'description',
        'price',
        'categories_id',
        'tags'
    ];

    //relational database ke galeri product
    public function galleries()
    {
        return $this->hasMany(ProductGallery::class, 'products_id', 'id');
    }

    //relational database ke kategori
    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'categories_id', 'id');
    }
}
