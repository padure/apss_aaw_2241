<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $tables = "cars";
    protected $fillable = [
        "make", "model", "year", "color", "price"
    ];
}