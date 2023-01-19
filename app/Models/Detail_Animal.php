<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Animal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_animals',
        'height',
        'height',
        'source',
        'longevity',
        'information',

    ];

    public function specie(){
        return $this->belongsTo(Specie::class, 'id_species','id');
    }
}
