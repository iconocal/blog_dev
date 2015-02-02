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

Route::get('/', function()
{
	// return View::make('hello');
    return 'Hello Codeup!';
});

Route::get('hi/{name}', 'HomeController@sayhello');


Route::get('roll-dice/{guess}', function($guess){
    $roll = rand(1, 6);

    return View::make('roll-dice')->with('roll', $roll)->with('guess', $guess);
});


Route::get('resume', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('whackamole', 'HomeController@showGame');

Route::get('test', 'HomeController@showTest');


Route::get('orm-test', function ()
{
    $post1 = new Post();
    $post1->title = Input::get('title'); // Example of how to capture input
    $post1->body  = Input::get('body');
    $post1->save();

    return Redirect::back()->withInput();
});




































