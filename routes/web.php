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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/normalgallery', function () {
    return view('normalgallery');
});

//User profile view
Route::get('/user', 'ProfileController@index');

Route::get('/adminwelcome', function() {
    return view('/adminwelcome');
});

Route::get('/messagecenter', function() {
    return view('/messagecenter');
});

Route::get('/contact', function() {
  return view('/contact');
});

//User update view

Route::Get('/videogallery', function() {
  return view('/videogallery');
});
Route::get('/userChange', 'userChangeController@index');

//Same page with added ID
Route::get('/userChange/{id}', 'userChangeController@edit');

//Update user
Route::any('/userChange/edit/{id}', 'userChangeController@update')->name('user.update');

Route::any('/userChange/delete/{id}', 'userChangeController@delete')->name('user.delete');

Route::get('/inschrijven', function () {
  return view('/inschrijven');
});

use Illuminate\Http\Request;

Route::post('/post_to_me', function(Request $request) {
  $name = $request->input('name');
  echo 'You Entered ' . $name;
});

Route::get('form', function() {
  return view('form');
});


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/getInschrijving', 'InschrijvingController@getInschrijving');
Route::post('/postInschrijving', 'InschrijvingController@postInschrijving');

 // De Gebruiker Mailer //
Route::resource('mail', 'MailController');

Route::resource('adminmail', 'AdminMailController');

Route::get('/getInsert', 'ContactController@getInsert');
Route::post('/postInsert', 'ContactController@postInsert');
Route::get('/image-gallery', 'ImageGalleryController@index');
Route::post('/image-gallery', 'ImageGalleryController@upload');
Route::delete('/image-gallery/{id}', 'ImageGalleryController@destroy');
Route::get('normalgallery', 'NormalImageGalleryController@index');
// Route::get('messagecenter', 'MessageCenterController@getInsert');
Route::resource('message' , 'MessageController');

// Route::post('/inschrijfformulier', );






Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();
