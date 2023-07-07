<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Estatus;

class EstatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $estatus = new Estatus();
        $estatus->nombre = 'Activo';
        $estatus->save();


        $estatus = new Estatus();
        $estatus->nombre = 'Inactivo';
        $estatus->save();
    }
}
