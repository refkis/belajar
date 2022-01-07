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
Route::get('/uuid', function () {
	list($usec, $sec) = explode(" ", microtime());
    $time = ((float)$usec + (float)$sec);
    $time = str_replace(".", "-", $time);
    $panjang = strlen($time);
    $sisa = substr($time, -1*($panjang-5));
    return Uuid::generate(3,rand(10,99).rand(0,9).substr($time, 0,5).'-'.rand(0,9).rand(0,9)."-".$sisa,Uuid::NS_DNS);
});

Route::get('/', function () {return redirect('/login'); });
Route::get('/login', function () { return view('auth.login'); });
Route::get('/logout','LoginController@logout');
Route::post('/submit-login','LoginController@submit_login');

Route::get('/admin', 'AdminController@index');
Route::group(["middleware"=>['auth.login','auth.menu']], function(){
    
    Route::group(['prefix'=>'setting-menu'], function(){
    Route::get('/','MenuController@index');
    Route::post('/add','MenuController@store');
    Route::get('/get/{uuid}', 'MenuController@get_data');
    });
    
    Route::group(['prefix'=>'setting-role'], function(){
    Route::get('/','RoleController@index');
    Route::post('/add','RoleController@store');
    Route::get('/get/{uuid}', 'RoleController@get_data');
    });
});