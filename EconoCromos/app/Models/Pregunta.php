<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $table = 'pregunta';
    protected $primaryKey = "idPregunta";
    public function tematica()
    {
        return $this->belongsTo(Tematica::class, 'idTematica');
    }

    public function actividad()
    {
        return $this->belongsTo(Actividad::class, 'idActividad');
    }
}
