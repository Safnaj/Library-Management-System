<?php

Route::get('/', function () {
    return view('dashboard');
});

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
