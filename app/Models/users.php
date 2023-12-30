<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //use HasFactory;
   protected $casts = [
        "specific_restaurant" => "array",
        "type_of_food" => "array"
    ];
}
