<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeerDBController;
use App\Http\Controllers\producteurController;
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


Route::get('/', [BeerDBController::class, 'welcome']);
Route::get('getbeer/{id}', [BeerDBController::class, 'show']);
Route::get('beers', [BeerDBController::class, 'index']);
Route::get('producers', [producteurController::class, 'index']);
Route::get('getproducer/{id}', [producteurController::class, 'show']);
Route::get('delbeer/{id}', [BeerDBController::class, 'destroy']);
Route::get('editbeer/{id}', [BeerDBController::class, 'edit']);
Route::get('updatebeer/{id}', [BeerDBController::class, 'update']);
Route::resource('beers',BeerDBController::class);

Route::get('ajoutbiere', [TestFormController::class, 'getInfos']);
Route::post('ajoutbiere', [TestFormController::class, 'postInfos']);



/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

//Route::get('/',[BeerDBController::class,'index']);

require __DIR__.'/auth.php';
