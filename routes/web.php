<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PromotionController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', function () {
    return view('clients/index');
});
Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('admin.page.dashboard');
        Route::controller(CategoryController::class)->prefix('/category')->group(function () {
            Route::get('/', 'index')->name('admin.page.category.index');
            Route::get('/add', 'create')->name('admin.page.category.create');
            Route::post('/add',  'store');
            Route::get('/update/{id}', 'edit')->name('admin.page.category.edit');
            Route::post('/update/{id}',  'update');
            Route::delete('/{id}',  'destroy')->name('admin.page.category.delete');
        });
        Route::controller(PromotionController::class)->prefix('/promotion')->group(function () {
            Route::get('/', 'index')->name('admin.page.promotion.index');
            Route::get('/add', 'create')->name('admin.page.promotion.create');
        });
    });
});
