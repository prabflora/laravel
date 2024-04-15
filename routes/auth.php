<?php
 
use App\Http\Controllers\Admin\Login\AdminAuthenticatedSessionController;
 use App\Http\Controllers\Admin\CategoryCrudController;
use App\Http\Controllers\Admin\ProductCrudController;
use Illuminate\Support\Facades\Route;


////////////////////////////Admin Routes /////////////////////////////////

Route::middleware('guest')->group(function () {

Route::get('admin/login', [AdminAuthenticatedSessionController::class, 'create'])
->name('login');
Route::post('admin/login', [AdminAuthenticatedSessionController::class, 'store']);

});


Route::middleware('auth')->group(function () {
Route::get('admin/dashboard', [AdminAuthenticatedSessionController::class, 'dashboard']);
Route::get('admin/table', [AdminAuthenticatedSessionController::class, 'table']);
Route::resource('admin/category', CategoryCrudController::class, ['as' => 'admin']);
Route::resource('admin/product', ProductCrudController::class, ['as' => 'admin']);
Route::post('admin/logout', [AdminAuthenticatedSessionController::class, 'destroy'])->name('logout');
});

////////////////////////////Admin Routes /////////////////////////////////
