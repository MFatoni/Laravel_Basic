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

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/workshop',function(){
	return "Halo halo bandung";
});

Route::get('/workshop','HomeController@getIndex');

Route::get('/', function(){
return 'test';
	});*/


Route::get('/','HomeController@getIndex')->name('home');
Route::get('/mahasiswa','MahasiswaController@getIndex')->name('mahasiswa');
Route::get('/mahasiswa/tambah','MahasiswaController@getTambah')->name('mahasiswa_tambah');
Route::get('/mahasiswa/ubah','MahasiswaController@getUbah')->name('mahasiswa_ubah');
Route::post('/mahasiswa/tambah/post', 'MahasiswaController@postTambah')->name('mahasiswa_tambah_post');
Route::post('/mahasiswa/hapus/post', 'MahasiswaController@postHapus')->name('mahasiswa_hapus_post');
Route::post('/mahasiswa/ubah/post','MahasiswaController@PostUbah')->name('mahasiswa_ubah_post');


