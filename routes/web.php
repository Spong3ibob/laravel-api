<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// routes/web.php

// 🕊️ Rotte pubbliche del frontoffice
Route::get('/', function () {
    return view('welcome');
});

// 🚫 Tutte le rotte protette da autenticazione del backoffice
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::resource('posts', PostController::class);
    
});

// 🛡️ Tutte le rotte di autenticazione (registrazione, login ecc...)
require __DIR__.'/auth.php';
