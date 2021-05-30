<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KreisController;

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


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route:: get('/review', [KreisController::class, 'store'])->name('data');
Route:: get('/review/sort', [KreisController::class, 'sort'])->name('datasort');
Route:: post('/review/detail', [KreisController::class, 'submit'])->name('review');
Route:: get('/import-form', [KreisController::class, 'importForm']);
Route:: post('/import', [KreisController::class, 'import'])->name('file-import');
//Route:: get('/review', [KreisController::class, 'import'])->name('data');

