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

Auth::routes(); //Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/operator',function(){
        return view('operator.info_operator');
    })->name('operator.info_operator');
});

//login operator
Route::get('/login','AuthController@login');
Route::post('/postlogin','AuthController@postlogin')->name('login');
Route::get('/logout','AuthController@logout');
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
Route::get('/periksa','PeriksaController@periksa');


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

//obat
Route::get('/obat','ObatController@obat');
Route::post('/obat/create','ObatController@create');
Route::get('/obat/{id}/edit_obat','ObatController@edit');
Route::post('/obat/{id}/update','ObatController@update');
Route::get('/obat/{id}/delete','ObatController@delete');

//penyakit
Route::get('/penyakit','PenyakitController@penyakit');
Route::post('/penyakit/create','PenyakitController@create');
Route::get('/penyakit/{id}/edit_penyakit','PenyakitController@edit');
Route::post('/penyakit/{id}/update','PenyakitController@update');
Route::get('/penyakit/{id}/delete','PenyakitController@delete');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
