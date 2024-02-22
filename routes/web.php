<?php
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route ;

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
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'register']);

Route::post('/register', [LoginController::class, 'proses_tambah_petugas']);
Route::post('/login', [LoginController::class, 'tampil_login_petugas']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [LoginController::class, 'home'])->name('home');
    Route::post('/tambah_produk', [KegiatanController::class, 'proses_tambah_produk']);
    Route::get('/tambah_produk', [KegiatanController::class, 'tambah_produk']);
    Route::get('/pelanggan', [KegiatanController::class, 'pelanggan']);
    Route::get('/penjualan', [KegiatanController::class, 'penjualan']);
    Route::get('/tambah_penjualan', [KegiatanController::class, 'tambah_penjualan']);
    Route::get('/tambah_penjualan', [KegiatanController::class, 'proses_tambah_penjualan']);
    Route::get('/tambah_produk', [KegiatanController::class, 'tambah_produk']);
    Route::get('/tambah_pelanggan', [KegiatanController::class, 'tambah_pelanggan']);
    Route::post('/tambah_pelanggan', [KegiatanController::class, 'proses_tambah_pelanggan']);
    Route::get('/logout', [KegiatanController::class, 'logout']);
    Route::get('/hapus-produk/{produk_id}', [KegiatanController::class, 'hapus',]);
    Route::get('/update-produk/{produk_id}', [KegiatanController::class, 'tampil_update_produk',]);
    Route::post('/update-produk/{produk_id}', [KegiatanController::class, 'proses_update_produk',]);
    Route::get('/hapus-pelanggan/{pelanggan_id}', [KegiatanController::class, 'hapus_pelanggan',]);
    Route::get('/update-pelanggan/{pelanggan_id}', [KegiatanController::class, 'tampil_update_pelanggan',]);
    Route::post('/update-pelanggan/{pelanggan_id}', [KegiatanController::class, 'proses_update_pelanggan',]);
});
