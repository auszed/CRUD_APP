<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // choose the columns that we need
    protected $fillable = [
        "name",
        "qty",
        "price",
        "description"
    ];
}
