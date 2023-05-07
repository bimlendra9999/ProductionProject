<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Sprovider\SproviderDashboardController;
use App\Http\Controllers\Front\ServiceCategoryController;
use App\Http\Controllers\Front\ServiceByCategoryController;
use App\Http\Controllers\Front\ServiceDetailsController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index'])->name('user.dashboard');
// Route::get('/admin/dashboard', [DashboardController::class,'index']);
Route::get('/service-category', [ServiceCategoryController::class, 'index'])->name('service-category');
Route::get('/categories-service/{category_slug}', [ServiceByCategoryController::class, 'index']);
Route::get('/service-detail/{service_slug}',[ServiceDetailsController::class, 'index']);



//Admin Dasboard
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class,'index']);

});

//Sprovider Dashboard
Route::middleware(['auth:sanctum','verified','authsprovider'])->group(function (){
    Route::get('/sprovider/dashboard', [SproviderDashboardController::class, 'index']);
});





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
