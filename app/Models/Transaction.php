<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'invoice_code',
        'quantity',
        'status',
        'bukti'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class)
            ->withDefault(function () {
                return new product();
            });
    }

    public function user() {
        return $this->belongsTo(User::class)
            ->withDefault(function () {
                return new user();
            });
    }
}
