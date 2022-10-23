<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
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

    public function products()
    {
        return $this->belongsToMany(Products::class);
    }
}
