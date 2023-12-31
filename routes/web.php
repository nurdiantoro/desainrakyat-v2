<?php

use App\Http\Controllers\Authentication;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
use App\Http\Controllers\Backend;
use App\Http\Controllers\Test;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', [Authentication::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [Authentication::class, 'LoginAction']);
Route::get('/logout', [Authentication::class, 'logout']);

// Frontend
Route::get('/', [Frontend::class, 'index']);
Route::get('/desaingrafis', [Frontend::class, 'desaingrafis']);
Route::get('/editvideo', [Frontend::class, 'editvideo']);
Route::get('/web', [Frontend::class, 'web']);
Route::get('/interior', [Frontend::class, 'interior']);
Route::get('/tentang', [Frontend::class, 'tentang']);

// Backend
Route::prefix('admin/')->middleware('auth')->group(function () {
    Route::get('', [Backend::class, 'index']);
    Route::get('/desaingrafis', [Backend::class, 'desaingrafis']);
    Route::get('/editvideo', [Backend::class, 'editvideo']);
    Route::get('/web', [Backend::class, 'web']);
    Route::get('/interior', [Backend::class, 'interior']);
    Route::get('/interior/{id}', [Backend::class, 'interiordetail']);
    Route::get('/review', [Backend::class, 'review']);

    // Create
    Route::post('/desaingrafis/tambah', [Backend::class, 'tambahdesaingrafis']);
    Route::post('/editvideo/tambah', [Backend::class, 'tambaheditvideo']);
    Route::post('/web/tambah', [Backend::class, 'tambahweb']);
    Route::post('/interior/tambah', [Backend::class, 'tambahinterior']);
    Route::post('/interiordetail/tambah', [Backend::class, 'tambahinteriordetail']);
    Route::post('/review/tambah', [Backend::class, 'tambahreview']);

    // Update
    Route::post('/highlight/ubah/{id}', [Backend::class, 'ubahhighlight']);
    Route::post('/desaingrafis/ubah/{id}', [Backend::class, 'ubahdesaingrafis']);
    Route::post('/editvideo/ubah/{id}', [Backend::class, 'ubahvideo']);
    Route::post('/web/ubah/{id}', [Backend::class, 'ubahweb']);
    Route::post('/interior/ubah/{id}', [Backend::class, 'ubahinterior']);
    Route::post('/review/ubah/{id}', [Backend::class, 'ubahreview']);

    // Delete
    Route::get('/desaingrafis/hapus/{id}', [Backend::class, 'hapusdesaingrafis']);
    Route::get('/editvideo/hapus/{id}', [Backend::class, 'hapuseditvideo']);
    Route::get('/web/hapus/{id}', [Backend::class, 'hapusweb']);
    Route::get('/interior/hapus/{id}', [Backend::class, 'hapusinterior']);
    Route::get('/interiordetail/hapus/{id}', [Backend::class, 'hapusinteriordetail']);
    Route::get('/review/hapus/{id}', [Backend::class, 'hapusreview']);
});
