<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudads';
	
	protected $fillable = [
        'departamento_id','nombre','estado','registradopor',
    ];
	
	protected $guarded = [
        'estado','registradopor',
    ];

    public function departamento()
    {
        return $this->belongsTo('App\Models\Departamento');
    }
	
	public function personas()
    {
        return $this->hasMany('App\Models\Persona', 'ciudad_id');
    }
}
