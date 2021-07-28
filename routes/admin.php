<?php  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;


// El prefijo que llevara antes, durante toda las rutas
Route::prefix('/admin')->group( function () {
   
    Route::get('/', [DashboardController::class, 'getDashboard']);

});

?>