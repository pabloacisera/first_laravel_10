<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    
    // guardar la tabla de la base de datos, en caso film(nombre de la tabla que creamos en la migracion)
    
    protected $table="film";
    
    // definir los campos
    
    protected $fillable = [
        'title',
        'description',
        'duration',
        'poster',
        'rating',
        'video',
    ];
}
