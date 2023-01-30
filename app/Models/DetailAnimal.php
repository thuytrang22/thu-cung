<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailAnimal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_animals',
        'height',
        'size',
        'source',
        'longevity',
        'information',
    ];
    protected $table = 'detail_animals';
    public function animal(){
        return $this->belongsTo(Animal::class, 'id_animals','id');
    }
}
