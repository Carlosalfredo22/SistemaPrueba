<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\DetallesPedidoController;

// Rutas protegidas por el middleware 'auth:sanctum'
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum','role:admin'])->group(function () {
    Route::resource('roles', RoleController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'userProfile']);

    //RUTAS API:
    //ruta categoria.
    Route::resource('categorias', CategoryController::class);
    //agregar la ruta de metodo pago
    Route::resource('metodos-pago', MetodoPagoController::class);
    //agregar la ruta de producto
    Route::resource('productos', ProductoController::class);
    //agregar la ruta de pedidos
    Route::resource('pedidos', PedidosController::class);
    //agregar la ruta de pago
    Route::resource('pagos', PagoController::class);
    //Agregar la ruta detallespedido
    Route::resource('detalles-pedido', DetallesPedidoController::class);
});