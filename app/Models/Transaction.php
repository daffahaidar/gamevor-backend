<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // yang akan diisi
    protected $fillable = [
        'users_id',
        'address',
        'payment',
        'total_price',
        'shipping_price',
        'status',
    ];

    //relational database ke user
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    //relational database ke transaction item
    public function items()
    {
        return $this->hasMany(TransactionItem::class, 'transactions_id', 'id');
    }
}
