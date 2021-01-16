<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Album;
use App\Models\Desbloqueado;

class User extends Authenticatable
{

    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'usuariosC';
    protected $primaryKey = "idUsuario";
    protected $fillable = [
        'nombre',
        'nickname',
        'email',
        'pais',
        'edad',
        'password',
        'rol',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    // Un usuario tiene (podria) varios albums
    public function albums()
    {
        return $this->hasMany(Album::class, 'idAlbum');
    }
    // Un usuario tiene (podria) varios cromos desbloqueados
    public function desbloqueados()
    {
        return $this->hasMany(Desbloqueado::class, 'idUsuario');
    }
}