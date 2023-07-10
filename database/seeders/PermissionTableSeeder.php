<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        //Permissions
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'estructura-list',
            'estructura-create',
            'estructura-filter',
            'estructura-edit',
            'estructura-delete',
            'gestiones-list',
            'gestiones-create',
            'gestiones-filter',
            'gestiones-export',
            'gestiones-edit',
            'gestiones-delete',
            'estadisticas-list',
            'estadisticas-meses',
            'estadisticas-seccion',
            'estadisticas-colonia',
            'estadisticas-sexo',
            'estadisticas-genero',
            'estadisticas-estatus',
            'estadisticas-tipo',
            'estadisticas-estructuras',
            'tipos-list',
            'tipos-create',
            'tipos-edit',
            'tipos-delete',
        ];
       
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
