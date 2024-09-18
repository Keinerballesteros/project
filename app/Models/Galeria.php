<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
    protected $fillable = ['titulo','descripcion' , 'id', 'categoria_id','imagen'];
    protected $guarded = [
        'estado','registradopor',
    ];



public function categoria()
{
    return $this->hasMany('App\Models\Categoria', 'categoria_id');
}
}
