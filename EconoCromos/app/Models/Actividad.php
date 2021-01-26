<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use \App\Models\Tematica;
Use \App\Models\Pregunta;
Use \App\Models\Cromo;

class Actividad extends Model
{
    protected $table = 'actividad';
    protected $primaryKey = "idActividad";
    
    // Una actividad le pertenece solo a una tematica
    public function tematica()
    {
        return $this->belongsTo(tematica::class, 'idTematica');
    }
    // Una actividad tiene muchas preguntas
    public function preguntas()
    {
        return $this->hasMany(Pregunta::class, 'idActividad');
    }

    // Una actividad tiene muchos cromos
    public function cromos()
    {
        return $this->hasMany(Cromo::class, 'idActividad');
    }

}
