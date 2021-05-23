<?php
/**
 * Authenticated routes
 * Middleware 'auth', 'web'
 * Prefix pagination
 */

Route::get('/pagination/users', 'Admin\UserController@pagination')->name('admin.pagination.users');

Route::get('books', 'BookController@pagination')->name('pagination.books');

Route::get('loans', 'LoanController@pagination')->name('pagination.loans');
