<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacanteController;

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

Route::get('/vacantes', [VacanteController::class, 'index'] )->middleware(['auth', 'verified'])->name('vacantes.index'); // verified para comprobar que este verificado
Route::get('/vacantes/create', [VacanteController::class, 'create'] )->middleware(['auth', 'verified'])->name('vacantes.create');

require __DIR__.'/auth.php';
