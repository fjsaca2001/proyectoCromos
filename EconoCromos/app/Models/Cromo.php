<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tematica;
use App\Models\Desbloqueado;

class Cromo extends Model
{
    protected $table = 'cromo';
    protected $primaryKey = "idCromo";

    // Un cromo pertenece solo a una tematica
    public function tematica()
    {
        return $this->belongsTo(tematica::class, 'idTematica');
    }
    // Un cromo puede estar desbloqeuado varias veces
    public function desbloqueados()
    {
        return $this->hasMany(Desbloqueado::class, 'idCromo');
    }
}
