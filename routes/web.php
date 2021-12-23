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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/home','login');
Route::view('/index','login');

Route::group(['middleware'=>"web"],function(){

    Route::get('/','studentcontroller@index');

Route::get('/demo','studentcontroller@display');
Route::view('/admin','admin');

Route::get('/delete/{id}','studentcontroller@delete');

route::view('/update','update');
Route::get('update/{id}','studentcontroller@edit');
Route::post('/update','studentcontroller@update');


Route::view('/register','register');
Route::post('register','studentcontroller@register');

Route::view('/login','login');
Route::post('login','studentcontroller@login');

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
          });

    
    Route::get('/change_password', function () {
    //Session::forget('user');
    return view('change_password');
          });
        
    Route::post('/update_password','studentcontroller@update_password')->name('change_password');

});

// Route::get('/search','studentcontroller@search');
Route::view('/bookissue','bookissue');
Route::get('/profile','studentcontroller@profile')->name('profile');
Route::get('/edit-profile', function () {
    return view('edit_profile');
});


Route::view('/students_adddetails','students/adddetails');
Route::post('/students_adddetails','studentcontroller@adddetails');

Route::get('/students_viewdetails','studentcontroller@viewdetails')->name('viewdetails');
Route::get('/students_chart/{id}','studentcontroller@chart')->name('chart');



Route::get('/notification', 'MessageController@notification')->name('notification');
Route::view('/send-notification', 'sendnotification');
Route::post('/send-notification', 'MessageController@sendnotification');