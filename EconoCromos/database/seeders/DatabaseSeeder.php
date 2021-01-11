<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('tematica')->truncate();
        // DB::table('actividad')->truncate();

        // \App\Models\User::factory(10)->create();
        $this->call(AlbumSeeder::class);
        $this->call(TematicasSeeder::class);
        $this->call(ActividadSeeder::class);

    }
}
