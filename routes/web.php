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

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'HomeController@home');
Route::get('/about', 'HomeController@about');
Route::post('/home/create','HomeController@create');

//login
Route::get('/login','AuthController@login');
Route::post('/postlogin','AuthController@postlogin');
//dashboard
Route::get('/dashboard','DashboardController@index');

//operator route
Route::get('/operator','OperatorController@operator');
Route::post('/operator/create','OperatorController@create');
Route::get('/operator/{id}/edit_operator','OperatorController@edit');
Route::post('/operator/{id}/update','OperatorController@update');
Route::get('/operator/{id}/delete','OperatorController@delete');

//pasien route
Route::get('/pasien','PasienController@pasien');
Route::post('/pasien/create','PasienController@create');
Route::get('/pasien/{id}/edit_pasien','PasienController@edit');
Route::post('/pasien/{id}/update','PasienController@update');
Route::get('/pasien/{id}/delete','PasienController@delete');

Route::get('/halpasien','PasienController@halpasien');


//poliklinik route
Route::get('/poliklinik','PoliklinikController@poliklinik');
Route::post('/poliklinik/create','PoliklinikController@create');
Route::get('/poliklinik/{id}/edit_poliklinik','PoliklinikController@edit');
Route::post('/poliklinik/{id}/update','PoliklinikController@update');
Route::get('/poliklinik/{id}/delete','PoliklinikController@delete');

//kategori penyakit
Route::get('/kategori_penyakit','Kategori_PenyakitController@kategori_penyakit');
Route::post('/kategori_penyakit/create','Kategori_PenyakitController@create');
Route::get('/kategori_penyakit/{id}/edit_kategori_penyakit','Kategori_PenyakitController@edit');
Route::post('/kategori_penyakit/{id}/update','Kategori_PenyakitController@update');
Route::get('/kategori_penyakit/{id}/delete','Kategori_PenyakitController@delete');



//dokter
Route::get('/dokter','DokterController@dokter');
Route::post('/dokter/create','DokterController@create');
Route::get('/dokter/{id}/edit_dokter','DokterController@edit');
Route::post('/dokter/{id}/update','DokterController@update');
Route::get('/dokter/{id}/delete','DokterController@delete');

Route::get('/haldokter','dokterController@haldokter');
