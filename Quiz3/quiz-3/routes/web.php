<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;



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

// Sudah buat branch

// Route::get('/', function () {
//     return view('welcome');
// });




// Route::get('/master', function(){
//     return view('layouts.master');
// });


Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/', [GameController::class, 'utama']);

//CRUD game
//CREATE
Route::get('/game/create',[GameController::class,'create']);
//kirim data db
Route::post('/game',[GameController::class,'store']);

//READ
//tampil
Route::get('/game',[GameController::class,'index']);
//detail read berdasar game
Route::get('/game/{game_id}',[GameController::class,'show']);

//UPDATE
//form update
Route::get('/game/{game_id}/edit',[GameController::class,'edit']);
Route::put('/game/{game_id}',[GameController::class,'update']);

//DELETE
Route::delete('/game/{game_id}',[GameController::class,'destroy']);

