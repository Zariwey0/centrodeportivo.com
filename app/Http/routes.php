<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('blade', function () {
    $drinks = array('Vodka','Gin','Brandy');
    return view('page',array('name' => 'The Raven','day' => 'Friday','drinks' => $drinks));
});


/*
// Authentication routes...
Route::get('auth/login', 'Front@login');
Route::post('auth/login', 'Front@authenticate');
Route::get('auth/logout', 'Front@logout');

Route::get('/checkout', [
    'middleware' => 'auth',
    'uses' => 'Front@checkout'
]);
*/

/* CAMPOS FORM REGISTRO-SUSCRIPCIÓN

array:8 [▼
  "_token" => "REp8KWe1a2fscG6oLmjS48NlAdBos6c2YAIaHkcy"
  "name" => ""
  "email" => ""
  "password" => ""
  "password_confirmation" => ""
  "stripeToken" => "tok_18XDXkAa09QI5ShlCWqBBzXM"
  "stripeTokenType" => "card"
  "stripeEmail" => "foo@example.com"
]

*/


Route::get('/agency','Front@agency');
Route::get('/about','Front@about');

/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
	Route::get('/','Front@index');
	Route::get('auth/login', 'Auth\AuthController@getLogin');
	Route::post('auth/login', 'Auth\AuthController@postLogin');
	Route::get('auth/logout', 'Auth\AuthController@logout');
	Route::get('auth/register', 'Auth\AuthController@getRegister');
	Route::post('auth/register', 'Auth\AuthController@postRegister');
	/*Route::post('auth/register', function(){
		//dd(Input::all());
		//una clave para identificar al usuario y su medio de pago en stripe
        $token = Input::get('stripeToken');
        //Registro del pago haciendo uso de la api
        Auth::user()->subscription('semanal')->create($token);
        return ('you are subscribed now');
	});*/
	Route::get('auth/confirm/email/{email}/confirm_token/{confirm_token}', 'Auth\AuthController@confirmRegister');
	Route::get('user', 'UserController@user');
	//
	//Route::get('user/profile', 'UserController@profile');
	Route::get('profile', 'UserController@profile');
	//
	//Route::post('user/updateprofile', 'UserController@updateProfile');
	Route::post('updateprofile', 'UserController@updateProfile');
	//
	//Route::get('user/password', 'UserController@password');
	Route::get('password', 'UserController@password');
	//
	Route::post('user/updatepassword', 'UserController@updatePassword');
	Route::post('user/createcomment', 'UserController@createComment');
	Route::post('user/deletecomment', 'UserController@deleteComment');
	Route::post('user/editcomment', 'UserController@editComment');

	/*Route::post('admin/createactivity', function(){
		dd(Input::all());
	});*/
	//Route::get('admin/createactivity', 'AdminController@createActivity');
	Route::match(['get', 'post'], 'admin/createactivitytype', 'AdminController@createActivityType');
	Route::match(['get', 'post'], 'admin/createactivity', 'AdminController@createActivity');
	Route::match(['get', 'post'], 'admin/createadmin', 'AdminController@createAdmin');
	Route::match(['get', 'post'], 'admin/createmonitor', 'AdminController@createMonitor');
	/////////////////////////////
	Route::post('getactivities', 'AdminController@getActivities');
	Route::post('getmonitors', 'AdminController@getMonitors');
	Route::post('updateschedule', 'AdminController@updateSchedule');
	/////////////////////////////
	Route::get('schedule', 'AdminController@configSchedule');
	Route::get('admin', 'AdminController@admin');
	Route::get('user/{id}', 'UserController@public_profile')->where(['id' => '[0-9]+']);
    //
    Route::get('schedule', 'UserController@schedule');
});
