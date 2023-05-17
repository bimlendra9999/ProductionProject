<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Sprovider\SproviderDashboardController;
use App\Http\Controllers\Front\ServiceCategoryController;
use App\Http\Controllers\Front\ServiceByCategoryController;
use App\Http\Controllers\Front\ServiceDetailsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeserviceController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ServiceProviderController;
use App\Http\Controllers\Sprovider\SproviderProfileController;
use App\Http\Controllers\Sprovider\ServiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\PaymentControllerData;
use App\Http\Controllers\Front\UserProfileController;


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
Route::post('/pay', [PaymentController::class, 'pay'])->name('payment');
Route::get('/success', [PaymentController::class, 'success']);
Route::get('/error', [PaymentController::class, 'error']);


Route::get('/user-profile',[UserProfileController::class,'index'])->name('user.profile');
Route::post('/user-profile',[UserProfileController::class,'profileUpdate'])->name('profileupdate');




//Admin Dasboard
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
    Route::resource('/categories', CategoryController::class);

    Route::get('/admin/services', [HomeserviceController::class, 'index'])->name('services.index');
    Route::get('/admin/services/create', [HomeserviceController::class, 'create'])->name('services.create');
    Route::post('/admin/services/store', [HomeserviceController::class, 'store'])->name('services.store');
    Route::get('/admin/services/edit/{id}', [HomeserviceController::class, 'edit'])->name('services.edit');
    Route::put('/admin/services/update/{id}', [HomeserviceController::class, 'update'])->name('services.update');
    Route::delete('/admin/services/destroy/{id}', [HomeserviceController::class, 'destroy'])->name('services.destroy');

    Route::resource('/users', CustomerController::class);
    Route::resource('/serviceproviders', ServiceProviderController::class);

    Route::get('/admin/payments', [PaymentControllerData::class, 'index'])->name('payment.records');
    Route::delete('admin/payment-records/{id}', [PaymentControllerData::class, 'destroy'])->name('payment.destroy');


});

//Sprovider Dashboard
Route::middleware(['auth:sanctum','verified','authsprovider'])->group(function (){
    Route::get('/sprovider/dashboard', [SproviderDashboardController::class, 'index'])->name('sprovider.dashboard');
    Route::get('/sprovider/dashboard/profiles', [SproviderProfileController::class, 'index'])->name('profiles.index');
    Route::get('/sprovider/dashboard/profiles/edit',[SproviderProfileController::class, 'edit'])->name('sprovider.edit_profile');
    Route::put('//sprovider/dashboard/profiles/update/{id}', [SproviderProfileController::class, 'update'])->name('sprovider.update_profile');

    Route::get('/sprovider/dashboard/services', [ServiceController::class, 'index'])->name('sproviderservices.index');
    Route::get('/sprovider/services/create', [ServiceController::class, 'create'])->name('sproviderservices.create');
    Route::post('/sprovider/services/store', [ServiceController::class, 'store'])->name('sproviderservices.store');
    Route::get('/sprovider/services/edit/{id}', [ServiceController::class, 'edit'])->name('sproviderservices.edit');
    Route::put('/sprovider/services/update/{id}', [ServiceController::class, 'update'])->name('sproviderservices.update');
    Route::delete('/sprovider/services/destroy/{id}', [ServiceController::class, 'destroy'])->name('sproviderservices.destroy');
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
