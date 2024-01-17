<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pozadavek extends Model
{
    use HasFactory;

    protected $fillable = [
        'den',
        'od_kdy',
        'do_kdy',
        'typ_restaurace_id',
        'konkretni_restaurace_id',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function typRestaurace()
    {
        return $this->belongsTo(TypyRestauraci::class, 'typ_restaurace_id');
    }

    public function konkretniRestaurace()
    {
        return $this->belongsTo(KonkretniRestaurace::class, 'konkretni_restaurace_id');
    }
}