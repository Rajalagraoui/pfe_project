<?php

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

Route::get('/student','App\Http\Controllers\StudentController@displayform');
Route::get('/', function () {
    return view('welcome');
});
Route::post('/compte', 'CompteController@modificationMotDePasse');
Route::post('/add_data','App\Http\Controllers\StudentController@save');
Route::get('/studentview','App\Http\Controllers\StudentController@viewform');
Route::get('/studentview','App\Http\Controllers\StudentController@index');
Route::get('/studentadd','App\Http\Controllers\StudentController@displayform');
Route::get('/click_edit/{id}','App\Http\Controllers\StudentController@modifier');
Route::post('/update/{id}','App\Http\Controllers\StudentController@maj');
Route::get('/click_delete/{id}','App\Http\Controllers\StudentController@supprimer');