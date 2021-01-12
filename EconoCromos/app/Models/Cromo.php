<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tematica;

class Cromo extends Model
{
    protected $table = 'cromo';
    protected $primaryKey = "idCromo";

    // Un cromo pertenece solo a una tematica
    public function tematica()
    {
        return $this->belongsTo(tematica::class, 'idTematica');
    }
}
