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
            'descripcion' => 'Rama de la economía que hace un uso extensivo de modelos matemáticos y estadísticos así como de la programación lineal y la teoría de juegos para analizar, interpretar y hacer predicciones sobre sistemas económicos, prediciendo variables como el precio de bienes y servicios, tasas de interés, tipos de cambio, las reacciones del mercado, el coste de producción, la tendencia de los negocios y las consecuencias de la política económica.'   ,
            'imgTematica' => 'img/econometria.jpg',
            'idAlbum' => '1'
        ]);

        Tematica::create([
            'nombreTematica' => 'Macroeconomía',
            'descripcion' => 'Encargada de estudiar los factores que intervienen en la administración de un país. Mide el rendimiento y el comportamiento junto con la estructura de la economía de forma conjunta. La macroeconomía estudia indicadores como el PIB, la inflación, los niveles de crecimiento de un país, la tasa de desempleo, etc, y cómo estos factores intervienen en las ganancias o pérdidas totales de un país.',
            'imgTematica' => 'img/macroeconomia.jpg',
            'idAlbum' => '1'
            ]);
        Tematica::create([
            'nombreTematica' => 'Microeconomía',
            'descripcion' => 'Se encarga de estudiar las acciones de los individuos en un mercado determinado. Estudia las tendencias económicas y las posibles consecuencias que pueden originarse mediante la acción de los individuos en combinación con los factores que intervienen en los costes de producción y comercialización de un bien o servicio.',
            'imgTematica' => 'img/microeconomia.jpg',
            'idAlbum' => '1'
        ]);
        Tematica::create([
            'nombreTematica' => 'Finanzas',
            'descripcion' => ' trata de explicar los riesgos y beneficios de una inversión incierta. Esta rama de la economía crea modelos que prueban las variables de una medida en busca de establecer la mejor decisión, es decir, aquella que genere menor riesgo y proporcione mejores beneficios.',   
            'imgTematica' => 'img/tema4.jpg',
            'idAlbum' => '1'
            ]);
        Tematica::create([
            'nombreTematica' => 'Ortodoxa',
            'descripcion' => 'Es la forma más ampliamente aceptada de enseñar en las universidades. De hecho, ha sido asociada con la economía neoclásica, la cual combina métodos y aproximaciones keynesianas a la macroeconomía.',   
            'imgTematica' => 'img/tema5.jpg',
            'idAlbum' => '1'
            ]);
        Tematica::create([
            'nombreTematica' => 'Heterodoxa',
            'descripcion' => 'Esta rama de la economía se refiere a las escuelas de pensamiento económico que se encuentran fuera de la economía ortodoxa. Para ella, la economía es la forma en que la sociedad se organiza para los procesos de producción, distribución y consumo de mercancías, distinguiendo a los individuos como actores que cooperan en el desarrollo de dichas actividades.',   
            'imgTematica' => 'img/tema6.jpg',
            'idAlbum' => '1'
        ]);
    }
}
