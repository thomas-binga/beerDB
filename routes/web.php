<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeerDBController;
use App\Http\Controllers\TestFormController;

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

Route::get('getbeer/{id}', [BeerDBController::class, 'show']);
Route::get('beers', [BeerDBController::class, 'index']);
Route::resource('beers',BeerDBController::class);

Route::get('testformulaire', [TestFormController::class, 'getInfos']);
Route::post('testformulaire', [TestFormController::class, 'postInfos']);
