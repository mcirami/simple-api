<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', [DataController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/data', [DataController::class, 'show'])->name('data.show');
    Route::get('/dashboard/filter', [DataController::class, 'filter'])->name('data.filter');
    Route::get('/export', [DataController::class, 'export'])->name('export');
});


require __DIR__.'/auth.php';
