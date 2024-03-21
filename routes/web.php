<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\MejaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\ProdukTitipanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::resource('/jenis', JenisController::class);
Route::resource('/menu', MenuController::class);
Route::resource('/stok', StokController::class);
Route::resource('/meja', MejaController::class);
Route::resource('/kategori', KategoriController::class);
Route::resource('/pelanggan', PelangganController::class);
Route::resource('/pemesanan', PemesananController::class);
Route::resource('/transaksi', TransaksiController::class);
Route::resource('/karyawan', KaryawanController::class);
Route::resource('/produktitipan', ProdukTitipanController::class);

Route::get('nota/{faktur', [TransaksiController::class, 'faktur']);
Route::get('export/menu',[MenuController::class,'exportData'])->name('export-menu');
Route::get('export/jenis',[JenisController::class,'exportData'])->name('export-jenis');
Route::get('export/stok',[StokController::class,'exportData'])->name('export-stok');
Route::get('export/pelanggan',[PelangganController::class,'exportData'])->name('export-pelanggan');
Route::get('export/meja',[MejaController::class,'exportData'])->name('export-meja');
Route::get('export/kategori',[KategoriController::class,'exportData'])->name('export-kategori');
Route::get('export/karyawan',[KaryawanController::class,'exportData'])->name('export-karyawan');