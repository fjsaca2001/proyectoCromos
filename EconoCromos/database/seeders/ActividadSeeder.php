<?php

namespace Database\Seeders;
use App\Models\Actividad;

use Illuminate\Database\Seeder;

class ActividadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Actividad::create([
            'nombreActividad' => 'actividad 1 Econometría',
            'idTematica' => '1'
        ]);
        Actividad::create([
            'nombreActividad' => 'actividad 2 Econometría',
            'idTematica' => '1'
        ]);

        Actividad::create([
            'nombreActividad' => 'actividad 1 Macroeconomía',
            'idTematica' => '2'
        ]);
        Actividad::create([
            'nombreActividad' => 'actividad 2 Macroeconomía',
            'idTematica' => '2'
        ]);

        Actividad::create([
            'nombreActividad' => 'actividad 1 Microeconomía',
            'idTematica' => '3'
        ]);
        Actividad::create([
            'nombreActividad' => 'actividad 2 Microeconomía',
            'idTematica' => '3'
        ]);
        Actividad::create([
            'nombreActividad' => 'actividad 1 Finanzas',
            'idTematica' => '4'
        ]);
        Actividad::create([
            'nombreActividad' => 'actividad 2 Finanzas',
            'idTematica' => '4'
        ]);
        Actividad::create([
            'nombreActividad' => 'actividad 1 Ortodoxa',
            'idTematica' => '5'
        ]);
        Actividad::create([
            'nombreActividad' => 'actividad 2 Ortodoxa',
            'idTematica' => '5'
        ]);
        Actividad::create([
            'nombreActividad' => 'actividad 1 Heterodoxa',
            'idTematica' => '6'
        ]);
        Actividad::create([
            'nombreActividad' => 'actividad 2 Heterodoxa',
            'idTematica' => '6'
        ]);
    }
}
