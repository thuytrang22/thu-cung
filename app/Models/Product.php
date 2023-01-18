<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_species',
        'name_product',
        'image',
        'price',
    ];

    public function specie(){
       return  $this->belongsTo(Specie::class, 'id_species','id');
    }
}
