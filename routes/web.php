<?php
namespace App\Http\Controllers\CursNameController;
use Illuminate\Support\Facades\Route;
use App\News;
use App\Users;
use App\CursName;
use App\NewCourse;

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
Route::get('/course','MenuController@coursemenu');
Route::get('chat','MenuController@chatmenu');
Route::get('warning','MenuController@warningmenu');
Route::get('asks','MenuController@asksmenu');
Route::post('/news', 'NewsController@store')->name('addpost');
Route::post('/chat', 'ChatController@store')->name('addchat');
Route::get('/course', 'CursNameController@studentshow');
Route::get('/showcourse/{id}', 'CursNameController@taskshow');

Route::post('newpassword', 'NewPasswordController@newpassword');


Route::group(['middleware' => ['auth', 'oktato']], function() {
    Route::get('/admin/course/{id}', 'CursNameController@show');
    Route::post('/addtask', 'CursNameController@edit');
    Route::post('/admin/editstudents', 'MainController@store')->name('adduser');
    Route::post('/admin/course', 'CursNameController@store')->name('addcursname');
    Route::post('admin/news', 'NewsController@adminstore')->name('addpost');
    Route::get('/admin/editcourse','MenuController@aeditcoursmenu');
    Route::get('admin/course','MenuController@acoursemenu');
    Route::get('admin/chat','MenuController@adminchatmenu');
    Route::post('admin/chat', 'ChatController@adminstore')->name('addchat');
});




Route::group(['middleware' => ['auth', 'oktato']], function() {
    Route::get('/admin/course', function(){
        $name = CursName::orderBy('name', 'asc')->get();
        return view('admin.acourse')->with('name', $name);

    });
});
 

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
    Route::get('/admin/news', function(){
        $news = News::orderBy('created_at', 'desc')->get();
        return view('admin.anews')->with('news', $news);
    });

});

Route::group(['middleware' => ['auth', 'oktato']], function() {
    Route::get('/admin/asks', function(){
        return view('admin.aasks');
    });

});
