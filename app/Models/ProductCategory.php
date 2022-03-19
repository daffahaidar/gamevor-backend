<?php

// models Kategori

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // yang akan diisi
    protected $fillable = [
        'name'
    ];

    //relational database
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
