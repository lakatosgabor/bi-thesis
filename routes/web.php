<?php

use Illuminate\Support\Facades\Route;
use App\News;
use App\Users;

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
Route::get('course','MenuController@coursemenu');
Route::get('chat','MenuController@chatmenu');
Route::get('warning','MenuController@warningmenu');
Route::get('asks','MenuController@asksmenu');

Route::post('/news', 'NewsController@store')->name('addpost');
Route::post('/admin/editstudents', 'MainController@store')->name('adduser');




Route::group(['middleware' => ['auth', 'oktato']], function() {
    Route::get('/admin/editstudents', function(){
        $users = Users::orderBy('name', 'asc')->get();
        return view('/admin.editstudents')->with('users', $users);
    });
});



Route::group(['middleware' => ['auth', 'oktato']], function() {
    Route::get('/admin/tutorial', function(){
        return view('admin.tutorial');
    });
});

Route::group(['middleware' => ['auth', 'oktato']], function() {
    Route::get('/admin/chat', function(){
        return view('admin.achat');
    });
});

Route::group(['middleware' => ['auth', 'oktato']], function() {
    Route::get('/admin/course', function(){
        return view('admin.acourse');
    });
});

Route::group(['middleware' => ['auth', 'oktato']], function() {
    Route::get('/admin/news', function(){
        return view('admin.anews');
    });

});



Route::group(['middleware' => ['auth', 'oktato']], function() {
    Route::get('/admin/asks', function(){
        return view('admin.aasks');
    });

});
