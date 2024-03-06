<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\PigController;



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

//  Route::get('/to_hello', function () {
//      return view('hello');
//  });

  //Route::get('/dog', function () {
//     //     return view('hello');
     //});

//Route::get('/hello',[CatController::class, 'hello']);
//Route::get('/dog',[DogController::class, 'dog']);
Route::get('/test',[CatController::class, 'testAction']);
Route::get('/dog_run',[DogController::class, 'run']);

Route::resource('pigs', PigController::class);
Route::get('/pigs_excel',[PigController::class, 'run']);