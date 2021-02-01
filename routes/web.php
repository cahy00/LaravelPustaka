<?php

use Illuminate\Support\Facades\Route;

Route::resource('/credit', 'CreditController');

// Route::get('/', function () {
//     return view('layouts.admin');
// });

Auth::routes();

Route::group(['middleware' => 'auth'], function(){

	Route::get('/home', 'HomeController@index')->name('home');

	//routing ke siswa
	Route::resource('/student', 'StudentController');
	Route::post('/student/class', 'StudentController@inputKelas')->name('class.store');
	Route::get('/student/{id}/destroy', 'StudentController@hapusKelas');

	//routing ke buku
	Route::resource('/book', 'BookController');
	Route::get('/book/{id}/destroy', 'BookController@destroy')->name('book.destroy');


	//routing ke kategori
	Route::resource('/category', 'CategoryController');


	//routing ke peminjaman
	Route::resource('/credit', 'CreditController');




});



