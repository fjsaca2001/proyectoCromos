<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tematica;

class TematicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tematica::create([
            'nombreTematica' => 'Econometría',
            'descripcion' => 'es la rama de la economía que hace un uso extensivo de modelos matemáticos y estadísticos así como de la programación lineal y la teoría de juegos para analizar, interpretar y hacer predicciones sobre sistemas económicos, prediciendo variables como el precio de bienes y servicios, tasas de interés, tipos de cambio, las reacciones del mercado, el coste de producción, la tendencia de los negocios y las consecuencias de la política económica.'   ,
            'imgTematica' => 'img/econometria.jpg',
            'idAlbum' => '1'
        ]);

        Tematica::create([
            'nombreTematica' => 'Macroeconomía',
            'descripcion' => 'Cuando hablamos de conjunto integrado, nos referimos al estudio de las variables económicas agregadas. De ahí, que al final de la definición, señalemos como objetivo explicar los ‘agregados económicos’. La producción de una empresa sería un valor individual. Sin embargo, el PIB sería un valor agregado (incluye la producción total del país expresado en su moneda).',
            'imgTematica' => 'img/macroeconomia.jpg',
            'idAlbum' => '1'
            ]);
        Tematica::create([
            'nombreTematica' => 'Microeconomía',
            'descripcion' => 'es la rama de la economía que hace un uso extensivo de modelos matemáticos y estadísticos así como de la programación lineal y la teoría de juegos para analizar, interpretar y hacer predicciones sobre sistemas económicos, prediciendo variables como el precio de bienes y servicios, tasas de interés, tipos de cambio, las reacciones del mercado, el coste de producción, la tendencia de los negocios y las consecuencias de la política económica.',
            'imgTematica' => 'img/microeconomia.jpg',
            'idAlbum' => '1'
        ]);
        Tematica::create([
            'nombreTematica' => 'Finanzas',
            'descripcion' => 'es la rama de la economía que hace un uso extensivo de modelos matemáticos y estadísticos así como de la programación lineal y la teoría de juegos para analizar, interpretar y hacer predicciones sobre sistemas económicos, prediciendo variables como el precio de bienes y servicios, tasas de interés, tipos de cambio, las reacciones del mercado, el coste de producción, la tendencia de los negocios y las consecuencias de la política económica.',   
            'imgTematica' => 'img/tema4.jpg',
            'idAlbum' => '1'
            ]);
        Tematica::create([
            'nombreTematica' => 'Ortodoxa',
            'descripcion' => 'es la rama de la economía que hace un uso extensivo de modelos matemáticos y estadísticos así como de la programación lineal y la teoría de juegos para analizar, interpretar y hacer predicciones sobre sistemas económicos, prediciendo variables como el precio de bienes y servicios, tasas de interés, tipos de cambio, las reacciones del mercado, el coste de producción, la tendencia de los negocios y las consecuencias de la política económica.',   
            'imgTematica' => 'img/tema5.jpg',
            'idAlbum' => '1'
            ]);
        Tematica::create([
            'nombreTematica' => 'Heterodoxa',
            'descripcion' => 'es la rama de la economía que hace un uso extensivo de modelos matemáticos y estadísticos así como de la programación lineal y la teoría de juegos para analizar, interpretar y hacer predicciones sobre sistemas económicos, prediciendo variables como el precio de bienes y servicios, tasas de interés, tipos de cambio, las reacciones del mercado, el coste de producción, la tendencia de los negocios y las consecuencias de la política económica.',   
            'imgTematica' => 'img/tema6.jpg',
            'idAlbum' => '1'
        ]);
    }
}
