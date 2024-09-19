<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['titulo', 'id' ];
    protected $guarded = ['estado','registradopor'];
    

    public function galerias()
    {
        return $this->belongsTo('App\Models\Categoria');
    }

}
