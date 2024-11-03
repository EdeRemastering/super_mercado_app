<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\DetalleVentaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\DetalleCompraController;
use App\Http\Controllers\MovimientoInventarioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Auth\VerificationController;

// Opción 1: Solo necesitas añadir esta línea si usas el controlador de verificación
Auth::routes(['verify' => true]);

// Opción 2: Puedes definir las rutas manualmente si prefieres tener control total
Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])
    ->name('verification.verify')
    ->middleware(['signed']);
Route::post('email/resend', [VerificationController::class, 'resend'])
    ->name('verification.resend');

Route::get('/', function () {
    return view('welcome');
});

// Autenticación
Auth::routes();

// Ruta al dashboard
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index'); // Ajusta esto según la estructura de la plantilla Sneat
    })->name('dashboard');

    // Rutas para Usuarios
    Route::resource('usuarios', UsuarioController::class);

    // Rutas para Categorías
    Route::resource('categorias', CategoriaController::class);

    // Rutas para Productos
    Route::resource('productos', ProductoController::class);

    // Rutas para Ventas
    Route::resource('ventas', VentaController::class);
    Route::resource('detalle-ventas', DetalleVentaController::class)->only(['index', 'show']);

    // Rutas para Proveedores
    Route::resource('proveedores', ProveedorController::class);

    // Rutas para Compras
    Route::resource('compras', CompraController::class);
    Route::resource('detalle-compras', DetalleCompraController::class)->only(['index', 'show']);

    // Rutas para Movimientos de Inventario
    Route::resource('movimientos-inventario', MovimientoInventarioController::class);

    // Rutas para Clientes
    Route::resource('clientes', ClienteController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
