<?php

namespace Database\Seeders;

use App\Models\Directorio;
use Illuminate\Database\Seeder;

class DirectorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $directorio = new Directorio();
        $directorio->nombre = 'Neyro Alexander Ocampo Calle';
        $directorio->cargo = 'Analista TI';
        $directorio->extension = 107;
        $directorio->celular = 3007768964;
        $directorio->email = 'analista-tic2@laumayer.com';
        $directorio->centro_costos = '1017789';
        $directorio->subproceso = 'TIC';
        $directorio->estado = 'Activo';

        $directorio->save();
    }
}
