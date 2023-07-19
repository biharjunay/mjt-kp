<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\CustomController;
use App\Models\Pekerjaan;
use App\Models\Portfolio;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::resource('/', BerandaController::class);


Auth::routes();
Route::middleware(['admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'show_data']);
    Route::get('/custom_page', [CustomController::class, 'index'])->name('custom.index');
    Route::get('/create_portfolio', [CustomController::class, 'input_portfolio'])->name('input.portfolio');
    Route::post('/create_portfolio', [CustomController::class, 'create_portfolio'])->name('create.portfolio');
    Route::get('/edit_portfolio/{portfolios}', [CustomController::class, 'edit_portfolio'])->name('edit.portfolio');
    Route::patch('/edit_portfolio/{portfolios}', [CustomController::class, 'update_portfolio'])->name('update.portfolio');
    Route::delete('/edit_portfolio/{portfolios}', [CustomController::class, 'delete_portfolio'])->name('delete.portfolio');
    Route::get('/create_service', [CustomController::class, 'create_service'])->name('create.service');
    Route::post('/create_service', [CustomController::class, 'store_service'])->name('store.service');
    Route::get('edit_service/{item}', [CustomController::class, 'edit_service'])->name('edit.service');
    Route::patch('/edit_service/{item}', [CustomController::class, 'update_service'])->name('update.service');
    Route::delete('/delete_service/{item}', [CustomController::class, 'delete_service'])->name('delete.service');
    Route::get('/lowongan/{id}', [CustomController::class, 'get_kerjaan'])->name('get.kerjaan');
    Route::get('/lowongan', [CustomController::class, 'get_semua_kerjaan'])->name('get.semua.kerjaan');
    Route::get('/create_pekerjaan', [CustomController::class, 'create_kerjaan'])->name('create.kerjaan');
    Route::post('/create_pekerjaan', [CustomController::class, 'store_kerjaan'])->name('store.kerjaan');
    Route::get('/edit_pekerjaan/{id}', [CustomController::class, 'edit_kerjaan'])->name('edit.kerjaan');
    Route::patch('/edit_pekerjaan/{id}', [CustomController::class, 'update_kerjaan'])->name('update.kerjaan');
    Route::delete('/edit_pekerjaan/{id}', [CustomController::class, 'delete_kerjaan'])->name('delete.kerjaan');
});
Route::middleware(['owner'])->group(function () {
    Route::get('/owner', [DashboardController::class, 'owner']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/picture/create', [PictureController::class, 'create'])->name('picture.create');
Route::post('/picture/create', [PictureController::class, 'store'])->name('picture.store');
Route::get('picture/{picture}', [PictureController::class, 'show'])->name('picture.show');
Route::delete('picture/{picture}', [PictureController::class, 'delete'])->name('picture.delete');
Route::get('copy/{picture}', [PictureController::class, 'copy'])->name('picture.copy');
Route::get('move/{picture}', [PictureController::class, 'move'])->name('picture.move');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/pekerjaan', [PekerjaanController::class, 'index']);
Route::get('/pekerjaan/{id}',[PekerjaanController::class, 'show_detail'])->name('detail.kerjaan');
Route::middleware(['pelamar'])->group(function() {
    Route::get('pekerjaan/{id}/lamar', [PekerjaanController::class, 'lamar_pekerjaan'])->name('lamar.kerjaan');
    Route::post('pekerjaan/{id}/lamar', [PekerjaanController::class, 'lamar'])->name('lamar');
});
