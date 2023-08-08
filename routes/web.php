<?php

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
Route::get('/test', [Test::class, 'index']);
Route::get('/test/tambah-page', [Test::class, 'tambahPage']);
Route::post('/test/tambah-data', [Test::class, 'tambah']);
Route::get('/test/update/{id}', [Test::class, 'ubah']);


// Frontend
Route::get('/', [Frontend::class, 'index']);
Route::get('/desaingrafis', [Frontend::class, 'desaingrafis']);
Route::get('/editvideo', [Frontend::class, 'editvideo']);
Route::get('/web', [Frontend::class, 'web']);
Route::get('/interior', [Frontend::class, 'interior']);
Route::get('/tentang', [Frontend::class, 'tentang']);

// Backend
Route::get('/admin', [Backend::class, 'index']);
Route::get('/admin/desaingrafis', [Backend::class, 'desaingrafis']);
Route::get('/admin/editvideo', [Backend::class, 'editvideo']);
Route::get('/admin/web', [Backend::class, 'web']);
Route::get('/admin/interior', [Backend::class, 'interior']);

// Create
Route::post('/admin/desaingrafis/tambah', [Backend::class, 'tambahdesaingrafis']);
Route::post('/admin/editvideo/tambah', [Backend::class, 'tambaheditvideo']);
Route::post('/admin/web/tambah', [Backend::class, 'tambahweb']);
Route::post('/admin/interior/tambah', [Backend::class, 'tambahinterior']);

// Update
Route::post('/admin/desaingrafis/ubah/{id}', [Backend::class, 'ubahdesaingrafis']);
Route::post('/admin/editvideo/ubah/{id}', [Backend::class, 'ubahvideo']);
Route::post('/admin/web/ubah/{id}', [Backend::class, 'ubahweb']);
Route::post('/admin/interior/ubah/{id}', [Backend::class, 'ubahinterior']);

// Delete
Route::get('/admin/desaingrafis/hapus/{id}', [Backend::class, 'hapusdesaingrafis']);
Route::get('/admin/editvideo/hapus/{id}', [Backend::class, 'hapuseditvideo']);
Route::get('/admin/web/hapus/{id}', [Backend::class, 'hapusweb']);
Route::get('/admin/interior/hapus/{id}', [Backend::class, 'hapusinterior']);
