<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AdddNisController;
use App\Http\Controllers\AddKelasController;
use App\Http\Controllers\AddPetugasController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');


Route::resource('/book', BookController::class);
Route::resource('/addnis', AdddNisController::class);
Route::resource('/addkelas', AddKelasController::class);
Route::resource('/addpetugas', AddPetugasController::class);
Route::get('/dashboard',[DashboardController::class, 'index']);


// Route::get('/book/add', [BookController::class]);