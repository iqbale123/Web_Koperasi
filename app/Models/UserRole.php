<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class)
            ->withDefault(function () {
                return new user();
            });
    }

    public function role()
    {
        return $this->belongsTo(Role::class)
            ->withDefault(function () {
                return new role();
            });
    }
}
