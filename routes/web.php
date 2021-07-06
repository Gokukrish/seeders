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

Auth::routes();
Route::group(['middleware' => ['auth']], function () { 
Route::resource('/fertilizer','FertilizerController');
Route::resource('/form2','Form2Controller');
Route::resource('/form3','Form3Controller');
Route::resource('/form4','Form4Controller');
Route::resource('/form5','Form5Controller');
Route::resource('/fertilizerAo','FertilizerAoController');
Route::resource('/pesticides','PesticidesAoController')->middleware('pr');
Route::resource('/seed','SeedController');
});



Route::get('/home', 'HomeController@index')->name('home');
