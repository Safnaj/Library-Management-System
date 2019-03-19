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

Route::get('/', function () {
    return view('dashboard');
});
// Route::get('/borrow', 'BrwsAndRtnsController@allbook');
Route::get('/borrow', 'BrwsAndRtnsController@index');
Route::post('/insert','BrwsAndRtnsController@add');
Route::get('/borrow/action', 'BrwsAndRtnsController@action')->name('borrow.action');
Route::get('/borrow/searchmember', 'BrwsAndRtnsController@searchmember')->name('borrow.searchmember');

Route::get('/return', function () {
    return view('return');
});