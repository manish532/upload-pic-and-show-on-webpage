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

Route::get('/', function(){
    return view('form');
});
Route::post('/send','storedata@store');
Route::get('datarecieve','storedata@fetchdata')->name('datarecieve');
Route::get('edit/{id}','storedata@updateuser')->name('edit');
Route::get('delete/{id}','storedata@deleteuser')->name('delete');

Route::get('/updatedata','storedata@updated');
