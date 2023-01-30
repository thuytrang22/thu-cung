<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_species',
        'name_animal',
        'image',
    ];
    public function detail_animal(){
        return $this->hasMany(DetailAnimal::class, 'id');
    }
    public function specie(){
        return $this->belongsTo(Specie::class, 'id_species','id');
    }
}
