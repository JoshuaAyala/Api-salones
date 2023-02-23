<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReservacionController;
use App\Http\Controllers\SalonController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\DisponibilidadController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para la tabla usuarios
Route::get('/usuarios', [UserController::class, 'index']);
Route::post('/usuarios', [UserController::class, 'store']);
Route::get('/usuarios/{id}', [UserController::class, 'show']);
Route::put('/usuarios/{id}', [UserController::class, 'update']);
Route::delete('/usuarios/{id}', [UserController::class, 'destroy']);

// Rutas para la tabla reservaciones
Route::get('/reservaciones', [ReservacionController::class, 'index']);
Route::post('/reservaciones', [ReservacionController::class, 'store']);
Route::get('/reservaciones/{id}', [ReservacionController::class, 'show']);
Route::put('/reservaciones/{id}', [ReservacionController::class, 'update']);
Route::delete('/reservaciones/{id}', [ReservacionController::class, 'destroy']);

// Rutas para la tabla salones
Route::get('/salones', [SalonController::class, 'index']);
Route::post('/salones', [SalonController::class, 'store']);
Route::get('/salones/{id}', [SalonController::class, 'show']);
Route::put('/salones/{id}', [SalonController::class, 'update']);
Route::delete('/salones/{id}', [SalonController::class, 'destroy']);

// Rutas para la tabla servicios
Route::get('/servicios', [ServicioController::class, 'index']);
Route::post('/servicios', [ServicioController::class, 'store']);
Route::get('/servicios/{id}', [ServicioController::class, 'show']);
Route::put('/servicios/{id}', [ServicioController::class, 'update']);
Route::delete('/servicios/{id}', [ServicioController::class, 'destroy']);

// Rutas para la tabla disponibilidades
Route::get('/disponibilidades', [DisponibilidadController::class, 'index']);
Route::post('/disponibilidades', [DisponibilidadController::class, 'store']);
Route::get('/disponibilidades/{id}', [DisponibilidadController::class, 'show']);
Route::put('/disponibilidades/{id}', [DisponibilidadController::class, 'update']);
Route::delete('/disponibilidades/{id}', [DisponibilidadController::class, 'destroy']);


/* Route::get('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

// Rutas para la tabla usuarios (protegidas solo para los usuarios con el rol de "admin")
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/usuarios', [UserController::class, 'index']);
    Route::post('/usuarios', [UserController::class, 'store']);
    Route::get('/usuarios/{id}', [UserController::class, 'show']);
    Route::put('/usuarios/{id}', [UserController::class, 'update']);
    Route::delete('/usuarios/{id}', [UserController::class, 'destroy']);
});

// Rutas para la tabla reservaciones (protegidas para los usuarios con el rol de "admin" y "user")
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/reservaciones', [ReservacionController::class, 'index']);
    Route::post('/reservaciones', [ReservacionController::class, 'store']);
    Route::get('/reservaciones/{id}', [ReservacionController::class, 'show']);
    Route::put('/reservaciones/{id}', [ReservacionController::class, 'update']);
});

// Rutas para la tabla salones (protegidas para los usuarios con el rol de "admin" y "user")
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/salones', [SalonController::class, 'index']);
});

// Rutas para la tabla servicios (protegidas para los usuarios con el rol de "admin" y "user")
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/servicios', [ServicioController::class, 'index']);
});

// Rutas para la tabla disponibilidades (protegidas para los usuarios con el rol de "admin" y "user")
Route::middleware(['auth', 'user'])->group(function () {
    Route::get('/disponibilidades', [DisponibilidadController::class, 'index']);
    Route::post('/disponibilidades', [DisponibilidadController::class, 'store']);
    Route::get('/disponibilidades/{id}', [DisponibilidadController::class, 'show']);
    Route::put('/disponibilidades/{id}', [DisponibilidadController::class, 'update']);
});

// Rutas para las reservaciones de un usuario específico (protegidas para los usuarios con el rol de "cliente" y solo pueden ver sus propias reservaciones)
Route::middleware(['auth', 'cliente'])->group(function () {
    Route::get('/usuarios/{id}/reservaciones', [UserController::class, 'reservaciones']);
});
 */