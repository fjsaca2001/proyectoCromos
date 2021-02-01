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
            'nombreActividad' => 'Econometría actividad 1',
            'idTematica' => '1'
        ]);
        Actividad::create([
            'nombreActividad' => 'Econometría actividad 2',
            'idTematica' => '1'
        ]);

        Actividad::create([
            'nombreActividad' => 'Macroeconomía actividad 1',
            'idTematica' => '2'
        ]);
        Actividad::create([
            'nombreActividad' => 'Macroeconomía actividad 2',
            'idTematica' => '2'
        ]);

        Actividad::create([
            'nombreActividad' => 'Microeconomía actividad 1',
            'idTematica' => '3'
        ]);
        Actividad::create([
            'nombreActividad' => 'Microeconomía actividad 2',
            'idTematica' => '3'
        ]);
        Actividad::create([
            'nombreActividad' => 'Finanzas actividad 1',
            'idTematica' => '4'
        ]);
        Actividad::create([
            'nombreActividad' => 'Finanzas actividad 2',
            'idTematica' => '4'
        ]);
        Actividad::create([
            'nombreActividad' => 'Ortodoxa actividad 1',
            'idTematica' => '5'
        ]);
        Actividad::create([
            'nombreActividad' => 'Ortodoxa actividad 2',
            'idTematica' => '5'
        ]);
        Actividad::create([
            'nombreActividad' => 'Heterodoxa actividad 1',
            'idTematica' => '6'
        ]);
        Actividad::create([
            'nombreActividad' => 'Heterodoxa actividad 2',
            'idTematica' => '6'
        ]);
    }
}
