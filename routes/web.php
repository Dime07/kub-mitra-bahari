<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\JasaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FeedController;

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
Route::get('/', [FrontendController::class, 'index'])->name('beranda');
Route::get('/jasa-kub', [FrontendController::class, 'jasa'])->name('jasa-kub');
Route::get('/produk-kub', [FrontendController::class, 'produk'])->name('produk-kub');

Route::get('/admin-panel', function () {
    return view('backend.dashboard');
})->middleware(['auth'])->name('admin');

// routes jasa
Route::get('/admin-panel/jasa', [JasaController::class, 'index'])->name('jasa');
Route::get('/admin-panel/jasa/create', [JasaController::class, 'create'])->name('admin.jasa.create');
Route::post('/admin-panel/jasa/store', [JasaController::class, 'store'])->name('admin.jasa.store');
Route::get('/admin-panel/jasa/delete', [JasaController::class, 'delete'])->name('admin.jasa.delete');

// routes produk
Route::get('/admin-panel/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/admin-panel/produk/create', [ProdukController::class, 'create'])->name('admin.produk.create');
Route::post('/admin-panel/produk/store', [ProdukController::class, 'store'])->name('admin.produk.store');
Route::get('/admin-panel/produk/delete', [ProdukController::class, 'delete'])->name('admin.produk.delete');

// routes feed
Route::get('/admin-panel/feed', [FeedController::class, 'index'])->name('feed');
Route::get('/admin-panel/feed/create', [FeedController::class, 'create'])->name('admin.feed.create');
Route::post('/admin-panel/feed/store', [FeedController::class, 'store'])->name('admin.feed.store');
Route::get('/admin-panel/feed/delete', [FeedController::class, 'delete'])->name('admin.feed.delete');


require __DIR__.'/auth.php';
