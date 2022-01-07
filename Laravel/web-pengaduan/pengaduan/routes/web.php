<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AduanController;
use App\Http\Controllers\PengaduController;

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



Route::post('/pengadu/create', 'PengaduController@store')->middleware('guest');
Route::get('/dashboard','DashboardController@index')->middleware('auth');

    Route::post('/aduan/{aduan}/detail','AduanController@postkomentar' );
    Route::post('/postlogin','AuthController@postlogin' );
    Route::get('/last', 'AduanController@last');
    Route::get('/', 'AduanController@beranda');
    Route::get('/aduan/{aduan}/detail','AduanController@detail' );
    Route::get('/logout','AuthController@logout' );
    Route::get('/login','AuthController@login')->name('login');
    Route::get('/daftar', function () {
            return view('/pengadu.daftar');
            });    
        

    // akses admin
    Route::group(['middleware' => ['auth','CekLevel:admin']],function(){
       
        Route::post('/aduan/{aduan}/update','AduanController@update' );  
        Route::post('/pejabat/create', 'PejabatController@store');
        Route::get('/pengadu/{id}/delete','PengaduController@delete' );
        Route::get('/pejabat', 'PejabatController@index');
        Route::get('/aduan/{aduan}/edit','AduanController@edit' );    
        Route::get('/aduan/{aduan}/delete','AduanController@delete' );    
        Route::get('/pejabat/tambah', function () {
            return view('/pejabat.tambah');
            });    
    });

    // akses admin dan pejabat
    Route::group(['middleware' => ['auth','CekLevel:admin,pejabat']],function(){
    
        Route::post('/aduan/{aduan}/status','AduanController@poststatus' );    
        Route::post('/pejabat/{id}/update','PejabatController@update' );
        Route::get('/pejabat/{id}/edit','PejabatController@edit' );
        Route::get('/pejabat/{id}/delete','PejabatController@delete' ); 
        Route::get('/aduan', 'AduanController@index');
        Route::get('/pengadu', 'PengaduController@index');
        Route::get('/aduan/{aduan}/status','AduanController@status' );    
    });
    
    //  akses admin,pengadu dan penjabat
    Route::group(['middleware' => ['auth','CekLevel:admin,pengadu,pejabat']],function(){
        
        Route::get('/aduan/{aduan}/riwayat','AduanController@riwayat' );  
        Route::post('/aduan/create','AduanController@store' );
        Route::post('/pengadu/{id}/update','PengaduController@update' );
        Route::get('/pengadu/{id}/edit','PengaduController@edit' );        
        Route::get('/buat/aduan','AduanController@buat' );
        Route::get('/aduan/masuk', 'AduanController@masuk');        
        Route::get('/pengadu/{pengadu}/detail','PengaduController@detail');
        Route::get('/pejabat/{pejabat}/detail','PejabatController@profil');
        });

    // akses pengadu
    Route::group(['middleware' => ['auth','CekLevel:pengadu']],function(){
    
        Route::get('/pengadu/{pengadu}/profil','PengaduController@profil' );
        Route::get('/aduan/aduansaya', 'AduanController@aduansaya');     
        });

