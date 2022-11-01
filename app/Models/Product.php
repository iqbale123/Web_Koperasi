<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'thumbnail',
        'ukuran'
    ];

    public function transaction()
    {
        return $this->hasMany(Transaction::class, 'product_id')
            ->withDefault(function () {
                return new transaction();
            });
    }
}
