<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\PromotionController;
use App\Http\Controllers\Clients\ClientsController;
use App\Http\Controllers\Clients\ProductsController as ClientProductController;
use App\Models\Category;
use App\Models\Product;
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

Route::controller(ClientsController::class)->prefix('/')->group(function(){
    Route::get('','index');
    Route::get('/home','index')->name('clients.page.home');

    Route::get('/cart','cart');



    Route::get('/huong_dan_thanh_toan','huong_dan_thanh_toan');
    Route::get('/chinh_sach_bao_hanh','chinh_sach_bao_hanh');
    Route::get('/chinh_sach_van_chuyen','chinh_sach_van_chuyen');

    


    Route::get('/pc_sao_choi','pc_sao_choi');
    Route::get('/pc_gaming_cam','pc_gaming_cam');
    Route::get('/pc_gaming_chuoi','pc_gaming_chuoi');
    Route::get('/pc_gaming_kiwi','pc_gaming_kiwi');



    Route::get('/trang_tri_pc','trang_tri_pc');
    Route::get('/den_ngu','den_ngu');
    Route::get('/bat_man','bat_man');
    Route::get('/marvel_black','marvel_black');
    Route::get('/ironman_black','ironman_black');
    Route::get('/ironman_red','ironman_red');


    Route::get('/man_hinh_may_tinh','man_hinh_may_tinh');
    Route::get('/man_hinh_ip2408s','man_hinh_ip2408s');
    Route::get('/man_hinh_vc242i','man_hinh_vc242i');
    Route::get('/man_hinh_ips165hz','man_hinh_ips165hz');



    Route::get('/mainboard','mainboard');
    Route::get('/mainboard_h510m','mainboard_h510m');
    Route::get('/mainboard_h610m','mainboard_h610m');

    
});

Route::controller(ClientProductController::class)->prefix('/product')->group(function(){
    Route::get('/{id}','index')->name('product.detail');    
});



Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('logout', 'logout')->name('logout');
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
            Route::post('/add', 'store');
            Route::get('/update/{id}', 'edit')->name('admin.page.promotion.edit');
            Route::post('/update/{id}', 'update');
            Route::delete('/{id}', 'destroy')->name('admin.page.promotion.delete');
        });
        Route::controller(ProductController::class)->prefix('/product')->group(function () {
            Route::get('/', 'index')->name('admin.page.product.index');
            Route::get('/add', 'create')->name('admin.page.product.create');
            Route::post('/add', 'store');
            Route::get('/update/{id}', 'edit')->name('admin.page.product.edit');
            Route::post('/update/{id}', 'update');
            Route::delete('/{id]', 'destroy')->name('admin.page.product.delete');
        });
    });
});

