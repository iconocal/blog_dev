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

Route::get('/', function()
{
	// return View::make('hello');
    return 'Hello Codeup!';
});

Route::get('parks', function(){
    return 'Here are some national parks.';
});

Route::post('parks', function() {
    return 'Which will you see???';
});

Route::get('say-hello/{name}', function($name) {
    if ($name == 'Ben') {
        return Redirect::to('http://bing.com');
    } else {
        return "Hello $name!";
    }
});

Route::get('say-hello/{name}/{age}', function($name, $age) {
    return "Hello $name! I hear you're $age years old!";
});

Route::get('resume', function() {
    return 'This is my resume.';
});

Route::get('portfolio', function() {
    return 'This is my portfolio.';
});



