<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use \App\Models\Tematica;

class Actividad extends Model
{
    protected $table = 'actividad';
    protected $primaryKey = "idActividad";
    
    public function tematica()
    {
        return $this->belongsTo(tematica::class, 'idTematica');
    }

}
