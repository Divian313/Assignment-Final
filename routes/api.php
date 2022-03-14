<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use \App\Http\Controllers\BookController;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Route::get('/employee', function (Request $request){
//    return 'Da nhan data employee';
//});

//Route::any('/submit', [Authentication::class, 'index'])->name('submit-login');
Route::post('/books/{id}', [BookController::class, 'show(id)']); //getOneBook
Route::get('/books/getTop08MostReviews', [BookController::class, 'getTop08MostReviews']);
Route::get('/books/getTop10Discount', [BookController::class, 'getTop10Discount']);
Route::get('/books/getAvgRatingStarAttribute', [BookController::class, 'getAvgRatingStarAttribute']);
Route::get('/books/getRecomended', [BookController::class, 'getRecomended']);
Route::get('/books/getPopular', [BookController::class, 'getPopular']);

//Route::get('/user/{id}', function ($id) {
//    [BookController::class, 'show(id)'];
//})->where('id', '[0-9]+');

Route::redirect('/books/testt', '/api/books/getTop08MostReviews', );


Route::resource('/books', BookController::class);

























