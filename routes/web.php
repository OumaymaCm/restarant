<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Frontend\CategoryController as FrontedCategoryController;
use App\Http\Controllers\Frontend\MenuController as FrontedMenuController;
use App\Http\Controllers\Frontend\ReservationController as FrontedReservationController;
use App\Http\Controllers\Frontend\WelcomeController;

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/admin/reservations', [ReservationController::class, 'index'])->name('admin.reservations.index');
Route::get('/categories', [FrontedCategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [FrontedCategoryController::class, 'show'])->name('categories.show');
Route::get('/menus', [FrontedMenuController::class, 'index'])->name('menus.index');
Route::get('/reservation/step-one', [FrontedReservationController::class, 'stepOne'])->name('reservations.step.one');
Route::post('/reservation/step-one', [FrontedReservationController::class, 'StoreStepOne'])->name('reservations.store.step.one');
Route::get('/reservation/step-two', [FrontedReservationController::class, 'stepTwo'])->name('reservations.step.two');
Route::post('/reservation/step-two', [FrontedReservationController::class, 'StoreStepTwo'])->name('reservations.store.step.two');
Route::get('/thankyou', [WelcomeController::class, 'thankyou'])->name('thankyou');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/menus', MenuController::class);
    Route::resource('/tables', TableController::class);
    Route::resource('/reservations', ReservationController::class);
});



require __DIR__.'/auth.php';
