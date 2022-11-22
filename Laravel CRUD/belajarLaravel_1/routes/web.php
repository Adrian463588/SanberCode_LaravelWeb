<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/welcome', [AuthController::class, 'welcome']);

Route::get('/table', function(){
    return view('page.table');
});
Route::get('/data-table', function(){
    return view('page.data-table');
});

//CRUD 

//Create data
//Form Create Cast
Route::get('/cast/create', [CastController::class, 'create']);
//Kirim data ke database
Route::post('/cast', [CastController::class, 'store']);

//Read data
//Tampil semua data
Route::get('/cast', [CastController::class, 'index']);
//Detail Cast Bio berdasarkan ID
Route::get('/cast/{cast_id}', [CastController::class, 'show']);

//Update data
//form update cast
Route::get('cast/{cast_id}/edit', [CastController::class, 'edit']);
//update data ke database berdasarkan id
Route::put('/cast/{cast_id}', [CastController::class, 'update']);

//Delete data (id)

Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);
