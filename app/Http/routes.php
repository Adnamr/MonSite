<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function () {
    return view('index');
});

Route::get('welcome','HomeController@index');

//Route::resource('index','ContactController');
// Route::get('/','ProfileController@index');
Route::get('blog','blogController@index');
Route::get('blog/web','blogController@web');
Route::get('blog/Descktop','blogController@Descktop');
Route::get('blog/Mobile','blogController@Mobile');
Route::get('blog/NonClasse','blogController@NonClasse');


Route::get('show/{id}',['uses'=>'CommentController@show','as'=>'show.id']);


Route::post('store','contactController@store');
Route::auth();

Route::get('/home', 'HomeController@index');
Route::resource('/home2', 'AdminController');

// auth
//Route::resource('log','LogController');

//admins
Route::get('welcome','contactController@destroy');
//view
Route::get('/cv','CvController@index');
Route::get('/documents','documentsController@index');
Route::get('/portfolio','portfolioController@index');
Route::get('/contacts','contactController@index');
Route::delete('destroy/{id}/','contactController@destroy');
Route::get('email/show/{id}','contactController@show');

//Commantaires
Route::post('comment/{id_blog}',['uses'=>'CommentController@store','as'=>'comment.store']);


