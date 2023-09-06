<?php


use App\Http\Controller\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('category/store', [CategoryController::class,'store']);

Route::get('categories', 'App\Http\Controllers\CategoryController@index');

Route::post('category/store', 'App\Http\Controllers\CategoryController@store');

Route::get('category/show/{id}', 'App\Http\Controllers\CategoryController@show');

Route::delete('category/destroy/{id}', 'App\Http\Controllers\CategoryController@destroy');

Route::put('category/update/{id}', 'App\Http\Controllers\CategoryController@update');


Route::post('movie/store','App\Http\Controllers\MovieController@store' );
Route::post('movie/update/{id}','App\Http\Controllers\MovieController@update');
Route::get('movies','App\Http\Controllers\MovieController@index');
Route::delete('movie/destroy/{id}','App\Http\Controllers\MovieController@destroy');
Route::get('movie/show/{id}', 'App\Http\Controllers\MovieController@show');

Route::post('category/store', 'App\Http\Controllers\CategoryController@store');
Route::get('categories', 'App\Http\Controllers\CategoryController@index');
Route::post('category/update/{id}', 'App\Http\Controllers\CategoryController@update');
Route::delete('category/destroy/{id}', 'App\Http\Controllers\CategoryController@destroy');
Route::get('category/show/{id}', 'App\Http\Controllers\CategoryController@show');


Route::post('role/store','App\Http\Controllers\RoleController@store');
Route::get('roles', 'App\Http\Controllers\RoleController@index');
Route::post('role/update/{id}','App\Http\Controllers\RoleController@update');
Route::delete('role/destroy/{id}', 'App\Http\Controllers\RoleController@destroy');
Route::get('role/show/{id}','App\Http\Controllers\RoleController@show');

Route::post('serie/store', 'App\Http\Controllers\SerieController@store');
Route::get('series', 'App\Http\Controllers\SerieController@index' );
Route::post('serie/update/{id}', 'App\Http\Controllers\SerieController@update');
Route::delete('serie/destroy/{id}', 'App\Http\Controllers\SerieController@destroy');
Route::get('serie/show/{id}',  'App\Http\Controllers\SerieController@show');


