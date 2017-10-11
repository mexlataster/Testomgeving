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

//profile route
Route::get('/user', 'ProfileController@index');

Route::get('/adminwelcome', function() {
    return view('/adminwelcome');
});

Route::get('/messagecenter', function() {
    return view('/messagecenter');
});

// De view van de Gebruiker




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

// Route::get('/getInsert', 'CrudController@getInsert');
// Route::post('/postInsert', 'CrudController@postInsert');
Route::get('/image-gallery', 'ImageGalleryController@index');
Route::post('/image-gallery', 'ImageGalleryController@upload');
Route::delete('/image-gallery/{id}', 'ImageGalleryController@destroy');
Route::get('normalgallery', 'NormalImageGalleryController@index');
// Route::get('messagecenter', 'MessageCenterController@getInsert');
Route::resource('message' , 'MessageController');

// Route::post('/inschrijfformulier', );






Route::get('/home', 'HomeController@index')->name('home');



Route::get('protected', ['middleware' => ['auth', 'admin'], function() { return "this page requires that you be logged in and an Admin"; }]);

Auth::routes();
