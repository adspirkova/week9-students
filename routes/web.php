<?php

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


//----Q3------
Route::get('/', function () {
    return view('index');
});

Auth::routes();


//----Q4------
Route::get('/home','HomeController@index')->name('home.index');


//----Q5------
Route::get('/student/{student_slug}','StudentController@show');


//----Q7------
Route::get('/students','StudentController@index');


//----Q11------
Route::post('/students','StudentController@detention');
