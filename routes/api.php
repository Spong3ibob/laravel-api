<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('test', function(){
//     return response()->json([
//         'name' => "Prova",
//         'oggetto ' => "Prova"
//     ]); 
// });

Route::get('posts',[PostController::class, 'index']);
Route::get('posts/{type}',[PostController::class, 'show']);