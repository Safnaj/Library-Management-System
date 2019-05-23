<?php

Route::get('/dashboard', function () {
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


// from aashif 

Route::get('/borrow', 'BrwsAndRtnsController@index');

Route::post('/insert','BrwsAndRtnsController@add');

Route::get('/borrow/action', 'BrwsAndRtnsController@action')->name('borrow.action');

Route::get('/borrow/searchmember', 'BrwsAndRtnsController@searchmember')->name('borrow.searchmember');

Route::get('/viewborrow', 'BrwsAndRtnsController@getBorrow');

Route::get('/return', function () {
    return view('return');
});

/// by  lowdini 

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
