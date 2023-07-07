<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Administrador
//Usuarios
Route::get('/Usuarios',[App\Http\Controllers\UserController::class, 'index'])->name('users.index');
Route::get('/Usuarios/Agregar', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
Route::post('/Usuarios', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
Route::get('/Usuarios/{id}/Detalles', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
Route::get('/Usuarios/{id}/Editar', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
Route::get('/Usuarios/{id}/Eliminar', [App\Http\Controllers\UserController::class, 'eliminar'])->name('users.eliminar');
Route::put('/Usuarios/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
Route::delete('/Usuarios/{id}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

//Roles
Route::get('/Roles',[App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
Route::get('/Roles/Agregar', [App\Http\Controllers\RoleController::class, 'create'])->name('roles.create');
Route::post('/Roles', [App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
Route::get('/Roles/{id}/Detalles', [App\Http\Controllers\RoleController::class, 'show'])->name('roles.show');
Route::get('/Roles/{id}/Editar', [App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');
Route::put('/Roles/{id}', [App\Http\Controllers\RoleController::class, 'update'])->name('roles.update');
Route::get('/Roles/{id}/Eliminar', [App\Http\Controllers\RoleController::class, 'eliminar'])->name('roles.eliminar');
Route::delete('/Roles/{id}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.destroy');

//Tipos
Route::get('/Tipos',[App\Http\Controllers\TiposController::class, 'index'])->name('tipos.index');
Route::get('/Tipos/Agregar', [App\Http\Controllers\TiposController::class, 'create'])->name('tipos.create');
Route::post('/Tipos', [App\Http\Controllers\TiposController::class, 'store'])->name('tipos.store');
Route::get('/Tipos/{tipos}/Detalles', [App\Http\Controllers\TiposController::class, 'show'])->name('tipos.show');
Route::get('/Tipos/{tipos}/Editar', [App\Http\Controllers\TiposController::class, 'edit'])->name('tipos.edit');
Route::put('/Tipos/{tipos}', [App\Http\Controllers\TiposController::class, 'update'])->name('tipos.update');
Route::get('/Tipos/{tipos}/Eliminar', [App\Http\Controllers\TiposController::class, 'eliminar'])->name('tipos.eliminar');
Route::delete('/Tipos/{tipos}', [App\Http\Controllers\TiposController::class, 'destroy'])->name('tipos.destroy');

//Estructura del cambio
Route::get('/Estructura-del-cambio',[App\Http\Controllers\EstructuraCambioController::class, 'index'])->name('Estructura.index');
Route::get('/Estructura/Filtrado',[App\Http\Controllers\EstructuraCambioController::class,'filter'])->name('Estructura.filter');
Route::get('/Estructura/Filtrado-Estructura',[App\Http\Controllers\EstructuraCambioController::class,'filterEstructura'])->name('Estructura.FilterEstructura');
Route::get('/Estructura-del-cambio/Agregar', [App\Http\Controllers\EstructuraCambioController::class, 'create'])->name('Estructura.create');
Route::post('/Estructura-del-cambio', [App\Http\Controllers\EstructuraCambioController::class, 'store'])->name('Estructura.store');
Route::get('/Estructura-del-cambio/{estructura_cambio}/Detalles', [App\Http\Controllers\EstructuraCambioController::class, 'show'])->name('Estructura.show');
Route::get('/Estructura-del-cambio/{estructura_cambio}/Editar', [App\Http\Controllers\EstructuraCambioController::class, 'edit'])->name('Estructura.edit');
Route::put('/Estructura-del-cambio/{estructura_cambio}', [App\Http\Controllers\EstructuraCambioController::class, 'update'])->name('Estructura.update');
Route::get('/Estructura-del-cambio/{estructura_cambio}/Eliminar', [App\Http\Controllers\EstructuraCambioController::class, 'eliminar'])->name('Estructura.eliminar');
Route::delete('/Estructura-del-cambio/{estructura_cambio}', [App\Http\Controllers\EstructuraCambioController::class, 'destroy'])->name('Estructura.destroy');

//Gestiones de solicitudes
Route::get('/Gestiones',[App\Http\Controllers\GestionesController::class,'index'])->name('Gestiones.index');
Route::get('/Gestiones/Filtrado',[App\Http\Controllers\GestionesController::class,'filter'])->name('Gestiones.filter');
Route::get('/Gestiones/Agregar',[App\Http\Controllers\GestionesController::class,'create'])->name('Gestiones.create');
Route::post('/Gestiones', [App\Http\Controllers\GestionesController::class,'store'])->name('Gestiones.store');
Route::get('/Gestiones/Autocomplete',[App\Http\Controllers\GestionesController::class, 'autocomplete'])->name('Gestiones.autocomplete');
Route::get('/Gestiones/{gestiones}/Detalles', [App\Http\Controllers\GestionesController::class,'show'])->name('Gestiones.details');
Route::get('/Gestiones/{gestiones}/Exportar', [App\Http\Controllers\GestionesController::class,'export'])->name('Gestiones.export');
Route::get('/Gestiones/{gestiones}/Editar', [App\Http\Controllers\GestionesController::class,'edit'])->name('Gestiones.edit');
Route::put('/Gestiones/{gestiones}', [App\Http\Controllers\GestionesController::class,'update'])->name('Gestiones.update');
Route::get('/Gestiones/{gestiones}/Eliminar', [App\Http\Controllers\GestionesController::class,'eliminar'])->name('Gestiones.eliminar');
Route::delete('/Gestiones/{gestiones}', [App\Http\Controllers\GestionesController::class,'destroy'])->name('Gestiones.destroy');

//Control-Estadistico - Graficas
Route::get('/Control-Estadistico',[App\Http\Controllers\ControlEstadisticoController::class,'index'])->name('Control-Estadistico.index');
Route::get('/Control-Estadistico/Meses-de-nacimiento',[App\Http\Controllers\ControlEstadisticoController::class,'meses'])->name('Control-Estadistico.meses');
Route::get('/Control-Estadistico/Seccion',[App\Http\Controllers\ControlEstadisticoController::class,'seccion'])->name('Control-Estadistico.seccion');
Route::get('/Control-Estadistico/Colonia',[App\Http\Controllers\ControlEstadisticoController::class,'colonia'])->name('Control-Estadistico.colonia');
Route::get('/Control-Estadistico/Sexo',[App\Http\Controllers\ControlEstadisticoController::class,'sexo'])->name('Control-Estadistico.sexo');
Route::get('/Control-Estadistico/Genero',[App\Http\Controllers\ControlEstadisticoController::class,'genero'])->name('Control-Estadistico.genero');
Route::get('/Control-Estadistico/Estatus',[App\Http\Controllers\ControlEstadisticoController::class,'estatus'])->name('Control-Estadistico.estatus');
Route::get('/Control-Estadistico/Tipo',[App\Http\Controllers\ControlEstadisticoController::class,'tipo'])->name('Control-Estadistico.tipo');
Route::get('/Control-Estadistico/Estructura',[App\Http\Controllers\ControlEstadisticoController::class,'estructuras'])->name('Control-Estadistico.estructura');

//Perfil
Route::get('/Perfil/{user}/Editar', [App\Http\Controllers\PerfilController::class, 'edit'])->name('perfil.edit');
Route::put('/Perfil/{user}', [App\Http\Controllers\PerfilController::class, 'update'])->name('perfil.update');
Route::get('/Perfil', [App\Http\Controllers\PerfilController::class,'show'])->name('perfil.details');