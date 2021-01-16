<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tematica;
use App\Models\User;


class Album extends Model
{
    protected $table = 'album';
    protected $primaryKey = "idAlbum";

    // Un album tiene muchas tematicas
    public function tematicas()
    {
        return $this->hasMany(Tematica::class, 'idAlbum');
    }
    // Un album tiene muchos usuarios
    public function usuarios()
    {
        return $this->hasMany(User::class, 'idAlbum');
    }
    // Un album tiene muchos cromos desbloqueados
    public function desbloqueados()
    {
        return $this->hasMany(Desbloqueado::class, 'idAlbum');
    }
    
}
