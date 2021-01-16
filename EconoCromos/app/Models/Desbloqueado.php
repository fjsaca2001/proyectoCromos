<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cromo;
use App\Models\User;
use App\Models\Album;

class Desbloqueado extends Model
{
    protected $table = 'desbloqueado';

    public function cromos()
    {
        return $this->hasMany(Cromo::class, 'idCromo');
    }
    public function usuarios()
    {
        return $this->hasMany(User::class, 'idUsuario');
    }
    public function albums()
    {
        return $this->belongsTo(Album::class, 'idAlbum');
    }
}
