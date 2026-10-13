<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidoDetalleController;

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/proveedores', [ProveedorController::class, 'index']);
Route::get('/materiales', [MaterialController::class, 'index']);
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/pedido-detalles', [PedidoDetalleController::class, 'index']);

// Rutas adicionales para demostrar relaciones Eloquent:
Route::get('/prueba/cliente-pedidos', fn () => dd(\App\Models\Cliente::with('pedidos')->get()));
Route::get('/prueba/empleado-pedidos', fn () => dd(\App\Models\Empleado::with('pedidos')->get()));
Route::get('/prueba/categoria-productos', fn () => dd(\App\Models\Categoria::with('productos')->get()));
Route::get('/prueba/proveedor-materiales', fn () => dd(\App\Models\Proveedor::with('materiales')->get()));
