<?php

namespace Database\Seeders;

use App\Models\Administrador\Administrador;
use Illuminate\Database\Seeder;

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrador = new Administrador();

        $administrador->nombre = 'Administrador';
        $administrador->email = 'administrador@gmail.com';
        $administrador->password = bcrypt('password');
        

    }
}
