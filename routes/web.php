<?php

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
use App\Http\Controllers\ScreenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello/{name}', [ScreenController::class,'hellow'])
->where('name','[a-zA-Z]{3}');

Route::get('/conta/{numero1}/{numero2}/{operacao?}', 
[ScreenController::class,'operations'])
->where('numero1','[0-9]','required')
->where('numero2','[0-9]','required');

Route::get('/idade/{ano}/{mes?}/{dia?}',
[ScreenController::class,'age'])
->where('ano','[0-9]{4}','required')
->where('mes','[0-9]{1,2}')
->where('dia','[0-9]{1,2}');

