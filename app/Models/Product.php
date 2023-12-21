<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'units',
        'description',
        'category'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
