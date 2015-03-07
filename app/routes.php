<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::resource('posts', 'PostsController');

Route::get('/', 'PostsController@index');

Route::get('resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('whackamole', 'HomeController@showGame');

Route::get('sumdigits', 'HomeController@showSumdigits');


Route::get('orm-test', function ()
{
    $post1 = new Post();
    $post1->title = Input::get('title');
    $post1->body  = Input::get('body');
    $post1->save();

    return Redirect::back()->withInput();
});

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@doLogin');

Route::get('logout', 'HomeController@doLogout');




































