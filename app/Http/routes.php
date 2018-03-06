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
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');


Route::get('/admin', function (){

    return view ('admin.index');

});



Route::group(['middleware'=>'admin'], function(){

Route::resource('/admin/users', 'AdminUsersController');

Route::resource('/admin/posts', 'AdminPostsUsersController');

});









//Route::group( ['middleware' => ['web'] ], function () {
//
//    /* these routes use 'auth' middleware, so only an authenticated user will access*/
//    Route::group( ['middleware' => 'admin' ], function () {
//        Route::get('/', 'AdminUsersController@index');
//    });
//
//    Route::auth();
//});