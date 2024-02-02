<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Test\TestController;
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

Route::get('/get-function', [TestController::class, 'firstTest'])->name('first.test');
Route::get('/get-second-function', [TestController::class, 'secondTest'])->name('second.test');
Route::get('/get-third-function', [TestController::class, 'thridTest'])->name('thrid.test');




