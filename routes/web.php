<?php

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/addBook', function () {
    return view('addBook');
});

Route::get('/categories', 'CategoryController@home');

Route::post('/addCategory', 'CategoryController@addCategory');

Route::get('/deleteCategory/{id}', 'CategoryController@deleteCategory');

Route::get('/addBook', 'BookController@home');

Route::post('/insertBook', 'BookController@addBook');

Route::get('/manageBook', 'BookController@getBooks');

Route::get('/updateBook/{id}', 'BookController@updateBook');

Route::get('/deleteBook/{id}', 'BookController@deleteBook');

Route::post('/manageBooks/update/{id}', 'BookController@editBook');


// Route::get('/borrow', 'BrwsAndRtnsController@allbook');

Route::get('/borrow', 'BrwsAndRtnsController@index');

Route::post('/insert','BrwsAndRtnsController@add');

Route::get('/borrow/action', 'BrwsAndRtnsController@action')->name('borrow.action');

Route::get('/borrow/searchmember', 'BrwsAndRtnsController@searchmember')->name('borrow.searchmember');

Route::get('/return', function () {
    return view('return');
});
