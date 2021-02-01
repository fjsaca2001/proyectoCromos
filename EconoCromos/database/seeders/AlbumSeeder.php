<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('album')->insert([
        //     'descripcion' => 'Este es tu album',   
        // ]);
        Album::create([  
            'nombre' => 'EconoCromos',
            'descripcion' => 'El álbum principal de la economía, este es la verdadera muestra del potencial de la aplicación' 
        ]);
        
    }
}
