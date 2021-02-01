<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nombre' => 'Usuario uno',
            'nickname' => 'user1',
            'email' => 'user1@gmail.com'   ,
            'pais' => 'Ecuador',
            'password' => '$2y$10$xXBbdTp6.yiysRZbvhE9BukTWdJ1afkFyxLTLcLeUQLuEP8431CUy',
            'edad' => '20',
            'rol' => '1'
        ]);
    }
}
