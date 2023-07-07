<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipos;

class TiposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $tipos = new Tipos();
        $tipos->nombre = 'ENLACE';
        $tipos->save();

        $tipos = new Tipos();
        $tipos->nombre = 'SIMPATIZANTE';
        $tipos->save();

        $tipos = new Tipos();
        $tipos->nombre = 'MILITANTE';
        $tipos->save();

        $tipos = new Tipos();
        $tipos->nombre = 'LIDER';
        $tipos->save();

        $tipos = new Tipos();
        $tipos->nombre = 'MOVILIZADOR';
        $tipos->save();
    }
}
