<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Album;
use App\Models\Cromo;

class Tematica extends Model
{   
    protected $table = 'tematica';
    protected $primaryKey = "idTematica";

    // Una tematica pertenece solo a un album
    public function album()
    {
        return $this->belongsTo(Album::class, 'idAlbum');
    }
    // Una tematica tiene varios cromos
    public function cromos()
    {
        return $this->hasMany(Cromo::class, 'idTematica');
    }

}
