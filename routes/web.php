<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Redirect awal ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// AUTH (tanpa register)
Auth::routes(['register' => false]);

/*
|--------------------------------------------------------------------------
| ADMIN ROUTE
|--------------------------------------------------------------------------
*/
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth']
], function () {

    Route::get('/dashboard', 'Admin\DashboardController@index')
        ->name('dashboard.index');

    // Data Master
    Route::resource('/users', 'Admin\UserController');
    Route::resource('/book-types', 'Admin\BookTypeController');
    Route::resource('/books', 'Admin\BookController');
    Route::resource('/book-borrowers', 'Admin\BookUserController');
    Route::resource('/book-borrowers-history', 'Admin\BookBorrowerHistoryController');

    // JSON
    Route::get('/book-json/{id}', 'Admin\JsonResponseController@detailBook')
        ->name('json-book.show');

    Route::get('/user-json/{id}', 'Admin\JsonResponseController@detailUser')
        ->name('json-user.show');

    Route::put('/book-approved/{id}', 'Admin\JsonResponseController@approvedBookBorrower')
        ->name('json-book.approved');

    Route::put('/book-not-approved/{id}', 'Admin\JsonResponseController@notApproveBookBorrower')
        ->name('json-book.not-approved');
});

/*
|--------------------------------------------------------------------------
| ANGGOTA ROUTE
|--------------------------------------------------------------------------
*/
Route::group([
    'prefix' => 'anggota',
    'as' => 'anggota.',
    'middleware' => ['auth']
], function () {

    Route::get('/dashboard', 'Anggota\DashboardController@index')
        ->name('dashboard.index');

    Route::resource('/book-borrowers-history', 'Anggota\BookBorrowerHistoryController');

    Route::post('/book-borrowers-json', 'Anggota\JsonResponseController@store')
        ->name('json-book-borrowers.store');

    Route::resource('/book-borrow', 'Anggota\BookBorrowController');
});
