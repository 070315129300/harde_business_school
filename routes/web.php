<?php
use App\Http\Controllers\BookController;
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

Route::get('/',[\App\Http\Controllers\BookController::class,'show']);

Route::get('/fetch',[\App\Http\Controllers\BookController::class,'fetchinsert']);
Route::get('deletebook/{id}',[BookController::class, 'deletebook']);
Route::get('editbook/{id}',[BookController::class, 'editbook']);
Route::put('editallbook/{id}',[BookController::class, 'editallbook']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
