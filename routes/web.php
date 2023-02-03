<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductsController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'role:user', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(DashboardController::class)->group(function(){
        Route::get('/admin/dashboard', 'index')->name('admindashboard');
    });

    Route::controller(CategoryController::class)->group(function(){
        Route::get('/all-category', 'index')->name('allCategory');
        Route::get('/add-category', 'addCategory')->name('addCategory');
    });


    Route::controller(SubCategoryController::class)->group(function(){
        Route::get('/all-subcategory', 'index')->name('allSubcategory');
        Route::get('/add-subcategory', 'addSubcategory')->name('addSubcategory');
    });

    Route::controller(ProductsController::class)->group(function(){
        Route::get('/all-product', 'index')->name('allProduct');
        Route::get('/add-product', 'addProduct')->name('addProduct');
    });

      Route::controller(OrderController::class)->group(function(){
        Route::get('/pending-order', 'index')->name('pendingOrder');
        Route::get('/completed-order', 'completedOrder')->name('completedOrder');
        Route::get('/cancelled-order', 'cancelledOrder')->name('cancelledOrder');
    });
});
// Route::get('/userprofile', [DashboardController::class, 'index'])->name('profile.destroy');


require __DIR__.'/auth.php';
