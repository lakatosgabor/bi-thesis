<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@index');
Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/dashboard', 'MainController@successlogin');
Route::get('/tutorial', 'MainController@successlogin');
Route::get('main/logout', 'MainController@logout');
Route::get('dashboard','MenuController@dashboardmenu');
Route::get('news','MenuController@newsmenu');
//Route::get('tasks','MenuController@tasksmenu');
Route::get('chat','MenuController@chatmenu');
Route::get('warning','MenuController@warningmenu');

Route::group(['middleware' => ['auth', 'oktato']], function() {
    Route::get('/tutorial', function(){
        return view('admin.tutorial');
    });

});


Route::get('tasks', 'DocumentController@index');
Route::post('/files', 'DocumentController@store');
Route::get('/files', 'DocumentController@index');

Route::get('files/{id}', 'DocumentController@show');



Route::get('teszt', 'MenuController@tesztmenu');