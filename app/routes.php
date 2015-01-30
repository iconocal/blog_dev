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

Route::get('hi/{name}', 'HomeController@sayhello');


// Route::get('say-hello/{urlName}', function($argName) {
// $data = array(
//     'viewName' => $argName,
//     'age'      => 0
//     );

//     // Return View::make('sayhello')->with('viewName', $argName);
//     return View::make('sayhello', $data);
//     return View::make('sayhello')->($data);
// });


Route::get('say-hello/{name}/{age}', function($name, $age) {
    return "Hello $name! I hear you're $age years old!";
});


Route::get('roll-dice/{guess}', function($guess){
    $roll = rand(1, 6);

    return View::make('roll-dice')->with('roll', $roll)->with('guess', $guess);
});


Route::get('resume/{name?}', 'HomeController@showResume');

Route::get('portfolio', 'HomeController@showPortfolio');

Route::get('whackamole', 'HomeController@playGame');
































