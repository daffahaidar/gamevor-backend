<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductGallery extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // yang akan diisi
    protected $fillable = [
        'products_id',
        'url'
    ];

    //laravel mutator untuk mengembalikan url dari API
    public function getUrlAttribute($url)
    {
        return config('app.url') . Storage::url($url);
    }
}
