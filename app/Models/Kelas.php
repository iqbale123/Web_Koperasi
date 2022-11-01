<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'kelas_id')
            ->withDefault(function () {
                return new user();
            });
    }
}
