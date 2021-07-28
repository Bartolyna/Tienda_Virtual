<?php  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductsController;



// El prefijo que llevara antes, durante toda las rutas
Route::prefix('/admin')->group( function () {
   
    Route::get('/', [DashboardController::class, 'getDashboard']);
    Route::get('/users', [UserController::class, 'getUsers']);

    //Routes Products
    Route::get('/products', [ProductsController::class, 'getHome']);
    Route::get('/products/add', [ProductsController::class, 'getProductAdd']);
});

?>