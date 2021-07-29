<?php  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\CategoriesController;




// El prefijo que llevara antes, durante toda las rutas
Route::prefix('/admin')->group( function () {
   
    Route::get('/', [DashboardController::class, 'getDashboard']);
    Route::get('/users', [UserController::class, 'getUsers']);

    //Routes Products
    Route::get('/products', [ProductsController::class, 'getHome']);
    Route::get('/products/add', [ProductsController::class, 'getProductAdd']);

    //Routes Categories
    Route::get('/categories', [CategoriesController::class, 'getHome']);
    Route::post('/category/add', [CategoriesController::class, 'postCategoryAdd']);
});

?>